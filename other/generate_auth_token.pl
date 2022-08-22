#!/usr/bin/perl
#
# THIS SOFTWARE IS NOT PART OF NMIS AND IS COPYRIGHTED, PROTECTED AND LICENSED
# BY OPMANTEK.
#
# YOU MUST NOT MODIFY OR DISTRIBUTE THIS CODE
#
# This code is NOT Open Source
#
# IT IS IMPORTANT THAT YOU HAVE READ CAREFULLY AND UNDERSTOOD THE END USER
# LICENSE AGREEMENT THAT WAS SUPPLIED WITH THIS SOFTWARE.   BY USING THE
# SOFTWARE  YOU ACKNOWLEDGE THAT (1) YOU HAVE READ AND REVIEWED THE LICENSE
# AGREEMENT IN ITS ENTIRETY, (2) YOU AGREE TO BE BOUND BY THE AGREEMENT, (3)
# THE INDIVIDUAL USING THE SOFTWARE HAS THE POWER, AUTHORITY AND LEGAL RIGHT
# TO ENTER INTO THIS AGREEMENT ON BEHALF OF YOU (AS AN INDIVIDUAL IF ON YOUR
# OWN BEHALF OR FOR THE ENTITY THAT EMPLOYS YOU )) AND, (4) BY SUCH USE, THIS
# AGREEMENT CONSTITUTES BINDING AND ENFORCEABLE OBLIGATION BETWEEN YOU AND
# OPMANTEK LTD.
#
# Opmantek is a passionate, committed open source software company - we really
# are.  This particular piece of code was taken from a commercial module and
# thus we can't legally supply under GPL. It is supplied in good faith as
# source code so you can get more out of NMIS.  According to the license
# agreement you can not modify or distribute this code, but please let us know
# if you want to and we will certainly help -  in most cases just by emailing
# you a different agreement that better suits what you want to do but covers
# Opmantek legally too.
#
# contact opmantek by emailing code@opmantek.com
#
# All licenses for all software obtained from Opmantek (GPL and commercial)
# are viewable at http://opmantek.com/licensing
#
# *****************************************************************************
our $VERSION = "2.335.0";

if (@ARGV == 1 && $ARGV[0] eq "--version")
{
	print "version=$VERSION\n";
	exit 0;
}

use strict;
use Crypt::CBC;

my ($key, $username, $tokentime) = @ARGV;
die "Usage: $0 <key> <username> [timestamp]
key: passphrase of arbitrary length.
timestamp: optional, default: now\n"
		if (!$key or !$username or (defined $tokentime && !int($tokentime)));
$tokentime ||= time;

#  what goes into the token? the token time stamp (in unix-seconds, UTC),
# as a plain string, followed by exactly one space and the username.

my $plain = $tokentime." ".$username;

# defaults: RFC2898/pkcs#5 padding, openssl-compatible salted header mode,
# and openssl-compatible key derivation function (PBKDF) -
# see https://www.openssl.org/docs/man1.1.0/crypto/EVP_BytesToKey.html
# but default keysize is an incompatibly 64 bits
my $engine = Crypt::CBC->new(-key => $key,
														 -cipher => "Rijndael",
														 -keysize => 128/8,
														 -nodeprecate => 1 );
my $crypted = $engine->encrypt_hex($plain);

print $crypted,"\n";
exit 0;
