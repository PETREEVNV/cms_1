<?php
class main extends ACore {
    
    public function get_content(){
        $query="SELECT id,title,discription,date,img_src FROM statti ORDER BY date DESC";
        $result=mysqli_query($this->db,$query);
        if(!$result){
            exit(mysqli_connect_error());
        }

        echo'<div id="main">';
        $row=array();
        for($i=0; $i< mysqli_num_rows($result); $i++){
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            printf("<div style='margin:10px;border-botton:2px solid #c2c2c2'>
            <p style='font-size:18px'>%s</p>
            <p>%s</p>
            <p><img style='margin-right:5px' width='150px' align='left' src='%s'>%s</p>
            <p style='color:red'> <a href='?option'></a></p>

            </div>",$row['title'],$row['date'],$row['date_src'],$row['discription']);
        }

        echo'</div>
		    </div>';
    }
}
?>