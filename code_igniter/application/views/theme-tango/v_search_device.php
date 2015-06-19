<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.8.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$sortcolumn = 3;
$columns = $column;
unset($column);
echo "<table cellspacing=\"1\" class=\"tablesorter\">\n";
echo "\t<thead>\n";
echo "\t\t<tr>\n";
foreach ($columns as $column) {
    if ($column->column_type > '') {
        if ($column->column_align == 'right') {
            $style = 'padding-right: 20px;';
        } else {
            $style = '';
        }
        echo "\t\t\t<th style=\"text-align: $column->column_align; $style\">".__($column->column_name)."</th>\n";
    }
}
echo "\t\t</tr>\n";
echo "\t</thead>\n";
echo "\t<tbody>\n";
$i = 0;
foreach ($query as $row) {
    $i++;
    echo "\t\t<tr>\n";
    foreach ($columns as $column) {
        $column_variable_name = $column->column_variable;
        $column_variable_name_sec = $column->column_secondary;
        $column_variable_name_ter = $column->column_ternary;
        $column_link = $column->column_link;
        $column_align = $column->column_align;
        $column_type = $column->column_type;
        if ($column_align == '') {
            $column_align = 'left';
        }
        if (!property_exists($row, 'system_id')) {
            $row->system_id = $i;
        }
        if (!isset($row->system_id)) {
            $row->system_id = $i;
        }
        if (($column_variable_name == 'hostname') and ($row->$column_variable_name == '')) {
            $row->hostname = "-";
        }

        switch ($column_type) {
            case "":
                break;

                case "link":
                    if ($row->$column_variable_name == '') {
                        $row->$column_variable_name = '-';
                    }
                    echo "\t\t\t<td align=\"$column_align\"><a href=\"../main/system_display/".intval($row->system_id)."\">".htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8")."</a></td>\n";
                    break;

            case "text":
                switch ($column_variable_name) {
                case "tag":
                    echo "\t\t\t<td align=\"center\"><a class=\"TagPopupTrigger\" rel=\"".intval($row->system_id)."\" href=\"#\"><img src=\"".$oa_theme_images."/16_link.png\" style='border-width:0px;' title=\"\" alt=\"\" /></a></td>\n";
                break;

                default:
                    if (isset($row->$column_variable_name)) {
                        $output = $row->$column_variable_name;
                        if (is_numeric($output) and (strpos($column_variable_name, "serial") === false) and (strpos($column_variable_name, "model") === false)) {
                            echo "\t\t\t<td align=\"right\"><span style=\"display: none;\">".mb_substr("0000000000".$output, -10)."</span><span id=\"".htmlentities($column_variable_name)."-".$i."\" onMouseOver=\"show_modifier('".htmlentities($column_variable_name)."','".$i."');\"  >".htmlentities($output)."</span><span id=\"".htmlentities($row->$column_variable_name)."-".$i."\">&nbsp;&nbsp;&nbsp;</span></td>\n";
                        } else {
                            if ($row->$column_variable_name == '') {
                                $row->$column_variable_name = ' ';
                            }
                            echo "\t\t\t<td align=\"$column_align\"><span id=\"".htmlentities($column_variable_name)."-".$i."\" onMouseOver=\"show_modifier('".htmlentities($column_variable_name)."','".$i."');\"  >".htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8")."</span><span id=\"".htmlentities($row->$column_variable_name)."-".$i."\">&nbsp;&nbsp;&nbsp;</span></td>\n";
                        }
                    } else {
                        echo "\t\t\t<td></td>\n";
                    }
                    break;
                }
                break;

            case "image":
                if ($row->$column_variable_name == "") {
                    $row->$column_variable_name = "unknown";
                }
                if ($column_align == '') {
                    $column_align = 'center';
                }
                if ($column->column_name == 'Icon') {
                    echo "\t\t\t<td style=\"text-align: center;\"><img src=\"".str_replace("index.php", "", site_url())."theme-tango/tango-images/16_".strtolower(str_replace(" ", "_", $row->$column_variable_name)).".png\" style='border-width:0px;' title=\"".$row->$column_variable_name_sec."\" alt=\"".$row->$column_variable_name_sec."\" /></td>\n";
                }
                if ($column->column_name == 'Picture') {
                    echo "\t\t\t<td style=\"text-align: center;\"><img src=\"".str_replace("index.php", "", site_url())."device_images/".htmlentities($row->$column_variable_name).".jpg\" style='border-width:0px; height:100px' title=\"".$row->$column_variable_name_sec."\" alt=\"".$row->$column_variable_name_sec."\" /></td>\n";
                }
                break;

            case "ip_address":
                echo "\t\t\t<td style=\"text-align: $column_align;\"><span style=\"display: none;\">".htmlentities($row->man_ip_address)."&nbsp;</span>".htmlentities(ip_address_from_db($row->man_ip_address))."</td>\n";
                break;

            case "multi":
                echo "\t\t\t<td style=\"text-align: $column_align;\">".str_replace(",  ", ",<br />", htmlentities($row->$column_variable_name))."</td>\n";
                break;

            case "timestamp":
                echo "\t\t\t<td style=\"text-align: $column_align;\">".htmlentities($row->$column_variable_name)."</td>\n";
                break;

            case "url":
                $href = '';
                if ($column_variable_name_ter > '') {
                    $image = base_url()."theme-tango/tango-images/16_".htmlentities($column_variable_name_ter).".png";
                } else {
                    $image = base_url()."theme-tango/tango-images/16_browser.png";
                }

                if (isset($row->$column_variable_name)) {
                    $href = str_replace("&", "&amp;", str_replace("&amp;", "&", $row->$column_variable_name));
                }
                if (($column_variable_name == '') && ($column_link > '')) {
                    $href = htmlentities($column_link, ENT_QUOTES, "UTF-8");
                }
                if ($column_variable_name_sec > '') {
                    $href .= htmlentities($row->$column_variable_name_sec, ENT_QUOTES, "UTF-8");
                }
                $href = str_replace(" ", "%20", $href);
                if ($href > '') {
                    echo "\t\t\t<td style=\"text-align: $column_align;\"><a href=\"".$href."\"><img src=\"".$image."\" border=\"0\" title=\"\" alt=\"\" /></a></td>";
                } else {
                    echo "\t\t\t<td style=\"text-align: $column_align;\"></td>\n";
                }
                break;

            #default:
            #	echo "\t\t\t<td align=\"$column_align\">" . $row->$column_variable_name . "</td>\n";
            #	break;
        }
    }
    echo "\n\t\t</tr>\n";
}
echo "\t</tbody>\n";
echo "</table>\n";
?>

<script type="text/javascript">
oa_cell_id = "";
oa_cell_value = "";
var x = new Array(<?php echo count($query); ?>);

<?php
function replace_amp($string)
{
    $replaced_amp = str_replace("&amp;", "&", $string);
    $replaced_amp = str_replace("&", "&amp;", $replaced_amp);

    return $replaced_amp;
}
?>

<div style="display: none;" id="example" title="Edit Systems Manual Data"></div>
