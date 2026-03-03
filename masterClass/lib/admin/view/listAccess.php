<h1 class='mt10 f29 d-uline d-italic'><?php echo $user; ?> 
    <a class="ml5" title="update nama tipe user" onclick="showUpdateUser()">
        edit
    </a>
</h1>
<form style="display: none;" id="updateTypeUser" method="post" action="updateTypeUser">
    <h3 class="f13">Update Tipe User</h3>
    <input type="hidden" name="id" value="<?php echo $id_user; ?>" />
    <input name="nama" value="<?php echo $user; ?>" />
    <input type="submit" name="submit" value="Update" class="btn-1 pad220" />
</form>
<?php 
$controller = "";

foreach($data as $data){
    if($controller!=$data['controller']){
        $view = str_replace("Controller","",$data['controller']);
        echo "</ul>";
        echo "<ul id='$view"."_list'>";
        echo "<h3>$view</h3>";
        $controller = $data['controller'];
    }
    if(isset($validasi[$data['controller']])){
        $valid = (in_array($data['action'],$validasi[$data['controller']]))?true:false;
    }else{
        $valid = false;
    }
    if($valid){
        echo 
        "<li id='MLA$data[id])'>".str_replace("action","",$data['action'])."           
            <a id='LA$data[id]' title='change access' onclick='ubahAkses(\"LA$data[id]\",$data[id])'><img src='image/admin/".$data['akses']."_akses.png'/></a>
            <a id='LR$data[id]' title='change redirect' onclick='ubahRedirect($data[id])'>".$data['redirect']."</a>
            
            <a id='LA$data[id]' title='add paramter' onclick='tambahParameter($data[id],\"$user\",$tipe_user)'><img src='image/admin/param.png'/></a>
            <a id='LA$data[id]' title='add user' onclick='tambahUser($data[id],$id_user)'><img src='image/admin/user.png'/></a>
        </li>";
        if(isset($data_param[$data['id']])){
            foreach($data_param[$data['id']] as $key=>$value){
                ?>
                <div id="param<?php echo $key ?>">
                    <li class="sub">
                        <?php echo "<img src='image/admin/param.png'/>   :   ".$value ?>
                        <a onclick='hapusAksesParam(<?php echo $key.",".$id_user ?>)'>Hapus</a>
                    </li>
                </div>
                <?php
            }
        }
        if(isset($data_user[$data['id']])){
            foreach($data_user[$data['id']] as $key=>$value){
                ?>
                <div id="aksesUser<?php echo $key ?>">
                    <li class="sub">
                        <?php echo "<img src='image/admin/user.png'/>   :   ".$value ?>
                        <a onclick='hapusAksesUser(<?php echo $key.",".$id_user ?>)'>Hapus</a>
                    </li>
                </div>
                <?php
            }
        }
    }else{
        echo
        "<li id='delAc$data[id]' class=bg-red1>".$data['action']."
            <a onclick='hapusAkses($data[id])'>Hapus</a>
        </li>";
    }
}
?>
</ul>

<div class="clear"></div>