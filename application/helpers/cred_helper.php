<?php 

    function json_to_tr_render($json_obj,$obj_id){
        $json_decoded_array=json_decode($json_obj, $assoc_array = true);
        $tr="";
        $tr.="<tr>
                <td align='center'><a href=".$json_decoded_array['site_name']." target='_blank'>".$json_decoded_array['site_name']."</a></td>
                <td>".$json_decoded_array['uname']."</td>
                <td align='center'>".$json_decoded_array['pass']."</td>
                <td width='300'>
                    <button class='btn btn-xs btn-danger glyphicon glyphicon-trash' hidden onclick='DeleteCred(".$obj_id.");'></button>
                    <strong>&middot;</strong>
                    <button class='btn btn-xs btn-info glyphicon glyphicon-pencil' hidden></button>
                </td>
              </tr>";
        $tr.="";

        return $tr;
    }


?>