#!/usr/bin/perl
#  Copyright 2022 Firstwave (www.firstwave.com)
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

# @package Open-AudIT
# @author Mark Unwin <mark.unwin@firstwave.com>
# @version   GIT: Open-AudIT_5.6.0
# @copyright Copyright (c) 2022, Firstwave
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

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

# What goes into the token? the token time stamp (in unix-seconds, UTC),
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
