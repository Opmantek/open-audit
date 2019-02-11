#!/bin/bash
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
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
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

# @package Open-AudIT
# @author Mark Unwin <marku@opmantek.com>
# 
# @version   2.4.0

# @copyright Copyright (c) 2014, Opmantek
# @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3

# Used by PHP to spawn a new request without blocking user requests
# url, method and data are allowable parameters
# Will send a POST or GET depending on the method passed
# If data is pased, will send that with the POST
# eg:  ./execute.sh url=http://localhost/open-audit/index.php/input/queue/discoveries method=post

for arg in "$@"; do
	parameter=${arg%%=*}
	value=${arg##*=}
	eval "$parameter"=\""$value\""
done

if [ -n "$url" ]; then
	if [ "$method" == "post" ]; then
		curl --data "data=" "$url" -k 2>/dev/null
	fi

	if [ "$method" == "get" ]; then
		curl "$url" -k 2>/dev/null
	fi
fi
