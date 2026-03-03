<h1 class="f29 d-uitalic mb10">Acces User</h1>
<a class="btn-1 pad5" onclick="showAddUser()">add</a>
<a href="RefreshAccess" class="btn-2 pad5">refresh</a>

<form id="addTypeUser" method="post" action="addTypeUser">
    <h3 class="f13 mt10">Tambah Tipe User</h3>
    <input name="nama" />
    <input type="submit" name="submit" value="Tambah" class="btn-1 pad220" />
</form>

<?php 

$a = RO::lib("access_tipeUser");
$data = $a->listTipeUser();
$view = RO::lib("view_grid");
$view->gridView($data,
    array(
        array(
            "header"=>"No",
            "value"=>'no',
        ),
        array(
            "header"=>"Nama",
            "value"=>'\'<a onclick="listAccessUser(\'.$data["id"].\')">\'.$data["nama"].\'</a>\'',
        ),
    ),
    array(
    'update'=>false,
    'delete_link'=>'deleteTypeUser',
    )
);

?>
<div id="listAkses">

</div>

<script>
function listAccessUser(id){
    ajax({
        method:"GET",
        url:"listAccess/"+id,
        id:"#listAkses",
        afterSuccess:function(){
          gridHeightPositionNormalizer(listAkses,"ul",1);  
        },
    });
}
function ubahAkses(target,id){
    ajax({
        method:"GET",
        url:"changeAccess/"+id,
        id:"#"+target,
    });
}
function ubahRedirect(id){
    ajax({
        method:"GET",
        url:"changeRedirect/"+id,
        id:"#LR"+id,
    });
}
function hapusAkses(id){
    ajax({
        method:"POST",
        url:"deleteAccess",
        sendDirect:"id::"+id,
        id:"#delAc"+id,
    });
}

function showAddUser(){
   addTypeUser.style.display = (addTypeUser.style.display=="")?"none":"";
}
function showUpdateUser(){
   updateTypeUser.style.display = (updateTypeUser.style.display=="")?"none":"";
}
addTypeUser.style.display ="none"

/** AKSES PARAMETER */

function tambahParameter(id_akses,tipe_user,redirect){
	$().w2form({
		name: 'form',
		style: 'border: 0px; background-color: transparent;',
        modal: true,
        fields: [
			{ name: 'tipe_user', type: 'text', required: true, 
                html:{
    		      caption: "Tipe User",
                  attr : 'style="width:90%" readonly',
                },
            },
            { name: 'id_akses', type: 'text', required: true, 
                html:{
    		      caption: "ID Akses",
                  attr : 'style="width:90%" readonly',
                },   
            },
            { name: 'param', type: 'textarea',  
                html:{
    		      caption: "Parameter",
                  attr : 'style="width:90%;height:100px"',
    		      }, 
            },    
            
		],
		actions: {
			"reset": function () { this.clear(); },
            "simpan": function () {
                this.url = "aksesAddParam";
                this.save(); 
            },
		},
        onSave: function(){
            this.clear();
            w2popup.close();
            listAccessUser(redirect);
        }
	});
	$().w2popup('open',{
		title	: 'Tambah Parameter Akses',
		body	: '<div id="form" style="width: 100%; height: 100%;"></div>',
		style	: 'padding: 15px 0px 0px 0px',
		width	: 650,
		height	: 300, 
		onOpen	: function (event) {
			event.onComplete = function () {
				$('#w2ui-popup #form').w2render('form');
			}
		}
	});
    w2ui.form.record.id_akses = id_akses;
    w2ui.form.record.tipe_user = tipe_user;
    
}

function hapusAksesParam(id,re){
    ajax({
        method:"POST",
        url:"aksesDeleteParam",
        sendDirect:"id::"+id,
        id:"#param"+id,
    });
    listAccessUser(re);
}

/** AKSES USER */
function tambahUser(id_akses,tipe_user){
	$().w2form({
		name: 'form_user',
		style: 'border: 0px; background-color: transparent;',
        modal: true,
        fields: [
            { name: 'id_akses', type: 'text', required: true, 
                html:{
    		      caption: "ID Akses",
                  attr : 'style="width:90%" readonly',
                },   
            },
            { name: 'id_user', type: 'list',  
                html:{
    		      caption: "User",
                  attr : 'style="width:90%;"',
                },
                options:{
                    url :base()+'skpd/getCombo/'+tipe_user
                }
            },    
            
		],
		actions: {
			"reset": function () { this.clear(); },
            "simpan": function () {
                this.url = 'aksesAddUser';
                this.save(); 
            },
		},
        onSave: function(){
            this.clear();
            w2popup.close();
            listAccessUser(tipe_user);
        }
	});
	$().w2popup('open',{
		title	: 'Tambah User Akses',
		body	: '<div id="form_user" style="width: 100%; height: 100%;"></div>',
		style	: 'padding: 15px 0px 0px 0px',
		width	: 750,
		height	: 200, 
		onOpen	: function (event) {
			event.onComplete = function () {
				$('#w2ui-popup #form_user').w2render('form_user');
                
			}
		},
        onClose : function (event) {
			event.onComplete = function () {
				w2ui.form_user.reset();
			}
		},
	});
    w2ui.form_user.record.id_akses = id_akses;
    w2ui.form_user.fields[1].options.url = base()+'skpd/getCombo/'+tipe_user;
}

function hapusAksesUser(id,re){
    ajax({
        method:"POST",
        url:"aksesDeleteUser",
        sendDirect:"id::"+id,
        id:"#aksesUser"+id,
    });
    listAccessUser(re);
}
</script>