 
function deleteItem(id, url, redirectUrl) {
   // alert(id);  
    swal({
        title: 'Êtes vous sûr?',
        text: "Voulez vous supprimer cet enregistrement?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui',
        cancelButtonText: 'Non',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger ml-2',
        buttonsStyling: false
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        //console.log(result);
        if (result.value) {
            $.ajax({
                url: url,
                data: {
                    "id": id
                },
                type: "GET"
            })
                .done(function (data) {
                    swal(
                        'Supprimer!',
                        'supprimer avec succès.',
                        'success'
                    );
                    window.location.href = redirectUrl;                       
                })
                .error(function (data) {
                    var text = "";
                    try {
                        var json = JSON.parse(data.responseText);
                        text = json.responseText;
                    } catch (e) {
                        text = "Une erreur est survenue, suppressions impossible!";
                       
                    }
                    
                });
            
        } else if (result.dismiss) {
          //swal('Changes are not saved', '', 'info')
         // window.location.href = redirectUrl;
        }
        
      })
       
   
}
function deleteItems(url, redirectUrl)
{
    if ($('.my_checkbox:checked').length != 0 )
    {

            var donnees = new Array();
            $("input:checked").each(function () {
                donnees.push($(this).attr("id"));
            });
            swal({
                title: "Êtes vous sûr?",
                text: "Voulez vous supprimer ces enregistrements ?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger ml-2',
                buttonsStyling: false
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                //console.log(result);
                if (result.value) {
                    $.ajax({
                        url: url,
                        data: {d:donnees},
                        type: "GET"
                    })
                        .done(function (data) {
                            swal(
                                'Suppressions!',
                                'Suppressions effectuée avec succès!',
                                'success'
                            );
                            window.location.href = redirectUrl;                       
                        })
                        .error(function (data) {
                            var text = "";
                            try {
                                var json = JSON.parse(data.responseText);
                                text = json.responseText;
                            } catch (e) {
                                text = "Une erreur est survenue, suppressions impossible!";
                               
                            }
                            
                        });
                    
                } else if (result.dismiss) {
                  //swal('Changes are not saved', '', 'info')
                 // window.location.href = redirectUrl;
                }
                
              })
    }
}
function deleteItemOLD1(id, url, redirectUrl) {
    alert(id);
    swal({
        title: "Êtes vous sûr?",
        text: "Voulez vous supprimer cet enregistrement?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        confirmButtonText: "Supprimer",
        confirmButtonColor: "#ec6c62",
        cancelButtonText: "Annuler"
    },
    function () {
        
        $.ajax({
            url: url,
            data: {
                "id": id
            },
            type: "GET"
        })
            .done(function (data) {
                sweetAlert
                ({
                        title: "Suppression",
                        text: "Suppression effectuée avec succès!",
                        type: "success"
                    },
                    function () {
                        window.location.href = redirectUrl;
                    });
            })
            .error(function (data) {
                var text = "";
                try {
                    var json = JSON.parse(data.responseText);
                    text = json.responseText;
                } catch (e) {
                    text = "Une erreur est survenue, suppressions impossible!";
                   
                }
                sweetAlert
                ({
                    title: "Erreur",
                    text: text,
                    type: "error"
                });
            });
    });
}

function Fenced(id, url, redirectUrl) {
    swal({
            title: "Êtes vous sûr?",
            text: "Voulez vous vraiment faire une clôture ?",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "OUI",
            confirmButtonColor: "#ec6c62",
            cancelButtonText: "NON"
        },
        function () {
            
            $.ajax({
                url: url,
                data: {
                    "id": id
                },
                type: "GET",
                dataType: "JSON",
            })
                .done(function (data) {
                    if(data.msg==1){
                    sweetAlert
                    ({
                            title: "clôture",
                            text: "clôture effectuée avec succès!",
                            type: "success"
                        },
                        function () {
                            window.location.href = redirectUrl;
                        });
                    }else{
                    sweetAlert
                    ({
                            title: "clôture",
                            text: "clôture impossible!",
                            type: "success"
                     });
                    }
                })
                .error(function (data) {
                    var text = "";
                    try {
                        var json = JSON.parse(data.responseText);
                        text = json.responseText;
                    } catch (e) {
                        text = "Une erreur est survenue, suppressions impossible!";
                       
                    }
                    sweetAlert
                    ({
                        title: "Erreur",
                        text: text,
                        type: "error"
                    });
                });
        });
}
function deleteItems1(url, redirectUrl)
{
    if ($('.my_checkbox:checked').length != 0 )
    {

        var donnees = new Array();
        $("input:checked").each(function () {
            donnees.push($(this).attr("id"));

        });
        swal({
                title: "Êtes vous sûr?",
                text: "Voulez vous supprimer ces enregistrements?",
                type: "warning",
                showCancelButton: true,
                closeOnConfirm: false,
                confirmButtonText: "Supprimer",
                confirmButtonColor: "#ec6c62",
                cancelButtonText: "Annuler"
            },
            function () {
                $.ajax({
                    url: url,
                    data: {d:donnees},
                    type: "POST"
                })
                    .done(function (data) {
                        sweetAlert
                        ({
                                title: "Suppressions",
                                text: "Suppressions effectuée avec succès!",
                                type: "success"
                            },
                            function () {
                                window.location.href = redirectUrl;
                            });
                    })
                    .error(function (data) {
                        var text = "";
                        try {
                            var json = JSON.parse(data.responseText);
                            text = json.responseText;
                        } catch (e) {
                            text = "Une erreur est survenue, suppressions impossible!";
                        }
                        sweetAlert
                        ({
                            title: "Erreur",
                            text: text,
                            type: "error"
                        });
                    });
            });
    }
}
function save( url,form )
{
    event.preventDefault();
    //alert(url);
    if(typeof(form) == 'undefined'){
        form = 'form';
    }
//    $.ajaxSetup({
//
//        headers: {
//
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//
//        }
//
//    });
    //alert(url);
    var url =  url;
    $.ajax({
        url : url,
        type: "POST",
        data: $('#'+form).serialize(),
        dataType: "JSON",
        success: function(data)
        {  
            if(data.route){
                //alert(data.route);
                window.location.href = data.route;
            }
            if(data.success){
               
               $('#form').find('input:text,select').val('');               
                alertify.success("Enregistrement effectué avec succès");
               // window.location.href = redirectUrl;
                // ('#form')[0].reset();
            }else{
                //alert("errors");
                console.log(data.errors);
                $.each(data.errors, function (index, value) {
                    //alert(index);

                    ///alertify.error(value);
                });
            }

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //console.log(data.errors);
            ///alertify.error('Erreur inatendue');

        }
    });
}
function url( url )
{
    event.preventDefault();
  
    var url =  url;
    $.ajax({
        url : url,
        type: "POST",
       // data: $('#'+form).serialize(),
        dataType: "JSON",
        success: function(data)
        {  
            if(data.route){
                //alert(data.route);
                window.location.href = data.route;
            }
            if(data.success){
               
               $('#form').find('input:text,select').val('');               
                alertify.success("Enregistrement effectué avec succès");
               // window.location.href = redirectUrl;
                // ('#form')[0].reset();
            }else{
                //alert("errors");
                console.log(data.errors);
                $.each(data.errors, function (index, value) {
                    //alert(index);

                    alertify.error(value);
                });
            }

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //console.log(data.errors);
            alertify.error('Erreur inatendue');

        }
    });
}
function saveAccount( url )
{
    event.preventDefault();

    var url =  url;
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status){   
                 
                      $('#CPT_NUMCPTE').val(data.CPT_NUMCPTE); 
                $('#form').find('input:text,select').attr('readonly','readonly');
                $('#form').find('button').attr('disabled','disabled');
                alertify.success("Enregistrement effectué avec succès, vous pouvez maintenant définir les signataires");
                
            }else{
               alertify.error("Ce client a déjà un compte pour ce produit");
//                console.log(data.errors);
//                $.each(data.errors, function (index, value) {                
//                    alertify.error(value);
//                });
            }

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.error('Erreur inatendue');

        }
    });
}
function saveStackForm( url ,form, selectHtmlToUpdate)
{
    event.preventDefault();
    var selectHtmlToUpdate ;
    var url =  url;
    var form ="."+ form;
    $.ajax({
        url : url,
        type: "POST",
        data: $(form).serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status){
                if(data.beneficiaire){
                   $('#totaltaux').val(data.totaltaux);
                   $('#row_empty').remove(); 
                   if(data.totaltaux<=0){
                     $('#validerbis').remove();   
                   }
                   $('#' + selectHtmlToUpdate).append('<tr id="'+data.nb+'"><td>'+data.nb+'</td><td>'+data.beneficiaire['BEN_NOMBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_PRENOMSBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_DATENAISSANCEBENEFICIAIRE']+'</td><td>'+data.beneficiaire['LEN_CODELIENPARENTE']+'</td><td>'+data.beneficiaire['BEN_TAUXBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_NUMEROPIECEBENEFICIAIRE']+'</td></tr>');  
                   
                }else{
                $('#' + selectHtmlToUpdate).append('<option value="' + data.last[''+data.codes+''] + '" selected="selected">' + data.last[''+data.libelle+''] + '</option>');
                }//$('#modal_form_horizontal2').hide();
                $('#modal_form_horizontal2').modal('hide');
                alertify.success("Enregistrement effectué avec succès");

            }else{

                console.log(data.errors);
                $.each(data.errors, function (index, value) {
                    //alert(index);

                    alertify.error(value);
                });
            }


//                $('#mo').on('hidden.bs.modal', function() {
//                    this.modal('show');
//                    alert(data);
//
//                });
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.error('Erreur inatendue');

        }
    });
}

function showStackedForm(urlTocreate) {
    $.ajax({
        type: 'GET',
        data: {
            "stacked": 'true',
        },
        url:urlTocreate,
        success: function (data) {
            $('#modal_form_horizontal2').html(data);
            $('#modal_form_horizontal2').modal();
        }
    });
}

function showStackedForm1(urlTocreate,champ,typechamp) {
    $.ajax({
        type: 'GET',
        data: "stacked="+champ+"&typechamp="+typechamp,
        url:urlTocreate,
        success: function (data) {
            $('#modal_form_horizontal2').html(data);
            $('#modal_form_horizontal2').modal();
        }
    });
}
function showStackedFormForTypecompte(urlTocreate,champ,typechamp,typecompte) {
    $.ajax({
        type: 'GET',
        data: "stacked="+champ+"&typechamp="+typechamp+"&typecompte="+typecompte,
        url:urlTocreate,
        success: function (data) {
            $('#modal_form_horizontal2').html(data);
            $('#modal_form_horizontal2').modal();
        }
    });
}
function showStackedFormForTypecompteAndTerme(urlTocreate,champ,typechamp,typecompte,terme,typclient,sexouform) {
    
    $.ajax({
        type: 'GET',
        data: "stacked="+champ+"&typechamp="+typechamp+"&typecompte="+typecompte+"&terme="+terme+'&typclient='+typclient+'&sexouform='+sexouform,
        url:urlTocreate,
        success: function (data) {
            $('#modal_form_horizontal2').html(data);
            $('#modal_form_horizontal2').modal();
        }
    });
}
function updateForm(urlTocreate) {
    event.preventDefault();
    $.ajax({
        url:urlTocreate,
        type: 'GET',
        
        
        success: function (data) {
            $('#modal-container').html(data);
            $('#modal-container').modal();
        }
    });
}
//function factorial(x) {
//  // This is the base case.
//  if (x === 0) return 1;
//  // This is the recursive one.
//  else return x * factorial(x - 1);
//}
function childitem(pcolectif, url)
{   //alert(factorial(5));
    event.preventDefault();
    //var selectHtmlToUpdate ;
    var url =  url;  
    var pcolectif =  pcolectif; 
    var x = 0;
//alert(url);
    $.ajax({
        url : url,
        type: "POST",
        data: 'PLC_CPTECOLLECTIF='+ pcolectif,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status){
                
				//alertify.success("Enregistrement effectué avec succès"+data.noeudactu['PLC_TYPECPTE']);
				
				if($('#' + pcolectif+'aa').attr('class')=='glyphicon glyphicon-folder-open'){
                                            var classRemove = '';                                               
                                            $('#tcorps1 tr').each(function () {  
                                                 classRemove = $(this).attr("class"); 
                                                 if(classRemove.search(pcolectif)===0){                                                   
                                                    $('tr.'+classRemove).remove();  
                                                 }
                                            });
					 // $('tr.'+pcolectif).remove(); 
					  $('#' + pcolectif+'aa').attr('class', 'glyphicon glyphicon-folder-close');
				 }else{
				if(data.noeudactu['PLC_TYPECPTE']=='C'){
				$('#' + pcolectif+'aa').attr('class', 'glyphicon glyphicon-folder-open'); 
				}
                	        x = data.nb-1;
                                //alert(data.last[9]['PLC_NUMCOMPTE']);
				while(x>=0) {
				 
					if(data.last[x]['PLC_NUMCOMPTE']!=data.last[x]['PLC_CPTECOLLECTIF'] && data.last[x]['PLC_TYPECPTE']=='C'){
				      $('#' + pcolectif+'a').after('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + pcolectif+'"><td><input class="my_checkbox" type="checkbox" name="check[]" id="'+data.last[x]['PLC_NUMCOMPTE']+'" > </td><td>' + data.last[x]['PLC_NUMCOMPTE'] + '</td><td><a href ="#"  onclick="childitem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/child\')"><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-folder-close" style="color:black;margin-left:' + data.level + '%"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</td>'+
					  '<td class="text-center"><ul class="icons-list"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>'+
                      '<ul class="dropdown-menu dropdown-menu-right"><li><a href="" onclick="updateForm(\'plancomptable/edit/'+data.last[x]['PLC_NUMCOMPTE']+'\')"><i class="icon-pencil6"></i> Modifier</a> </li>'+
					  '<li><a href ="#" onclick="deleteItem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/delete\',\''+data.url+'\')"><i class="icon-x"></i>Supprimer</a></li></ul></li></ul></td></tr>');
					}
					if(data.last[x]['PLC_NUMCOMPTE']!=data.last[x]['PLC_CPTECOLLECTIF'] && data.last[x]['PLC_TYPECPTE']=='I'){
				      $('#' + pcolectif+'a').after('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + pcolectif+'"><td><input class="my_checkbox" type="checkbox" name="check[]" id="'+data.last[x]['PLC_NUMCOMPTE']+'" > </td><td>' + data.last[x]['PLC_NUMCOMPTE'] + '</td><td><a href ="#"><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-file" style="letter-spacing: 0px;color:black;margin-left:' + data.level + '%"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</td>'+
					  '<td class="text-center"><ul class="icons-list"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>'+
                      '<ul class="dropdown-menu dropdown-menu-right"><li><a href="" onclick="updateForm(\'plancomptable/edit/'+data.last[x]['PLC_NUMCOMPTE']+'\')" ><i class="icon-pencil6"></i> Modifier</a> </li>'+
					  '<li><a href ="#" onclick="deleteItem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/delete\',\''+data.url+'\')"><i class="icon-x"></i>Supprimer</a></li></ul></li></ul></td></tr>');
					
					}
				    x--;
			     }
			  }
			  // alertify.success("Enregistrement effectué avec succès"+data.level);

            }


              
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.error('Erreur inatendue');
           
        }
    });
}
function childitem1(pcolectif, url)
{
    event.preventDefault();
    //var selectHtmlToUpdate ;
    var url =  url;  
    var pcolectif =  pcolectif; 
    var x = 0;
//alert(url);
    $.ajax({
        url : url,
        type: "POST",
        data: 'PLC_CPTECOLLECTIF='+ pcolectif,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status){
                
				//alertify.success("Enregistrement effectué avec succès"+data.noeudactu['PLC_TYPECPTE']);
				
				if($('#' + pcolectif+'aa').attr('class')=='glyphicon glyphicon-folder-open'){
                                           var classRemove = '';                                               
                                            $('#tcorps tr').each(function () {  
                                                 classRemove = $(this).attr("class"); 
                                                 if(classRemove.search(pcolectif)===0){                                                   
                                                    $('tr.'+classRemove).remove();  
                                                 }
                                            });
					  //$('tr.'+pcolectif).remove(); 
					  $('#' + pcolectif+'aa').attr('class', 'glyphicon glyphicon-folder-close');
				 }else{
				if(data.noeudactu['PLC_TYPECPTE']=='C'){
				$('#' + pcolectif+'aa').attr('class', 'glyphicon glyphicon-folder-open');
				}
                                 x = data.nb-1;
                                 //avant x <= data.nb et x++
				while(x>=0) {
				 
					if(data.last[x]['PLC_NUMCOMPTE']!=data.last[x]['PLC_CPTECOLLECTIF'] && data.last[x]['PLC_TYPECPTE']=='C'){
				      $('#' + pcolectif+'a').after('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + pcolectif+'" style="border:0px;"><td style="border:0px;"><input class="my_checkbox" type="radio" name="choix" value="'+data.last[x]['PLC_NUMCOMPTE']+'" id="'+data.last[x]['PLC_NUMCOMPTE']+'" ><a href ="#" onclick="childitem1(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/child\')">'+
					  '<span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-folder-close" style="word-spacing:1px;color:black;margin-left:' + data.level + '%"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</span><span class="' + pcolectif+'"></td></tr>');
					}
					if(data.last[x]['PLC_NUMCOMPTE']!=data.last[x]['PLC_CPTECOLLECTIF'] && data.last[x]['PLC_TYPECPTE']=='I'){
				      $('#' + pcolectif+'a').after('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + pcolectif+'" style="word-spacing:1px;border:0px;"><td style="border:0px;"><p style=""><input class="my_checkbox" type="radio" name="choix" value="'+data.last[x]['PLC_NUMCOMPTE']+'" id="'+data.last[x]['PLC_NUMCOMPTE']+'" ><a><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-file" style="color:black;margin-left:' + data.level + '%"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'<p style=""></td></tr>');
					
					}
				    x--;
			     }
			  }
			  // alertify.success("Enregistrement effectué avec succès"+data.level);

            }


              
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.error('Erreur inatendue');
           
        }
    });
}
function selected1(url,typechamp)
{
    event.preventDefault();    
    var choix = $("input[name=choix]:checked").val();   
    var pcolectif = $('tr#'+choix+'a').attr('class'); 
    var compte = $('#champ').val().trim();
    if(choix!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+choix+'&typechamp='+typechamp,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0){
              $('#'+compte).val(choix);
//              $('#'+compte).trigger( "change" );
               $('#PLC_CPTECOLLECTIF').val(pcolectif); 
              
               $('#closeSelect').click();
               
            }else{
                
               (typechamp==='I') ? alertify.error('Ce compte ne correspond pas à un compte individuel'): alertify.error('Ce compte ne correspond pas à un compte collectif');
            }
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  } 
   
    
}
function selectedForTypecompte(url,typechamp,typecompte)
{
    event.preventDefault();    
    var choix = $("input[name=choix]:checked").val();   
    var pcolectif = $('tr#'+choix+'a').attr('class'); 
    var compte = $('#champ').val().trim();
    if(choix!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+choix+'&typechamp='+typechamp+'&typecompte='+typecompte,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0){
              $('#'+compte).val(choix);
//              $('#'+compte).trigger( "change" );
               $('#PLC_CPTECOLLECTIF').val(pcolectif); 
              
               $('#closeSelect').click();
               
            }else{
               alertify.error('Ce compte ne correspond pas'); 
               //(typechamp==='I') ? alertify.error('Ce compte ne correspond pas à un compte individuel'): alertify.error('Ce compte ne correspond pas à un compte collectif');
            }
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  } 
   
    
}
function selectedForTypecompteAndTerme(url,typechamp,typecompte,terme)
{
    event.preventDefault();  
    var choix = $("input[name=choix]:checked").val();   
    var pcolectif = $('tr#'+choix+'a').attr('class'); 
    var compte = $('#champ').val().trim();
    var i ;
    if(choix!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+choix+'&typechamp='+typechamp+'&typecompte='+typecompte+'&terme='+terme,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0 && data.exist!=0){
              $('#'+compte).val(choix);
              if($('#updCEP_CODEPARAMETRECOMPTEEPARGNE').val()==='x'){
//                  $('#listTermeCompte #new').empty();
//                  $('#listTermeCompte #new').append('<td style="border:0px;"><span id="terme">' +data.terme+ '</span></td><td style="border:0px;"><span id="compte">' +choix+ '<span></td>');
//                  $('#listTermeCompte #new').attr('class',terme);
                     $('#TER_CODETERME').val('').change();
                     $('#PLC_NUMCOMPTE').val('');
                  i=$('.new').length;i++;
                 // alert(data.suffixecompte);
                  //alert(data.typclient);
                  $('table #listTermeCompte').append('<tr id="'+i+'" class="new"><input type="hidden"  name="TER_CODETERME'+i+'" value="'+terme+'">'+
                          '<input type="hidden"  name="PLC_NUMCOMPTE'+i+'" value="'+choix+'">'+
                          '<input type="hidden"  name="nbreDeDuree" value="'+i+'">'+
                          '<td style="border:0px;"><span id="">' +data.terme+ '</span></td>'+
                          '<td style="border:0px;"><span id="">' +choix+ '<span></td></tr>');
                  //alert($('.new').length);
                  
              }
               $('#libellecompte').text(data.libellecompte); 
//                $('#'+compte).trigger( "change" );
               $('#PLC_CPTECOLLECTIF').val(pcolectif); 
              
               $('#closeSelect').click();
               
            }else{
               if(data.exist==0){
               alertify.error('Compte incompatible avec le sexe ou la forme juridique'); 
                }
                if(data.nb==0){
               alertify.error('Compte incompatible avec la durée sélectionnée');
                }
               
               //(typechamp==='I') ? alertify.error('Ce compte ne correspond pas à un compte individuel'): alertify.error('Ce compte ne correspond pas à un compte collectif');
            }
            
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  } 
   
    
}
function selected()
{
    event.preventDefault();    
	var choix = $("input[name=choix]:checked").val();	
    var	pcolectif = $('tr#'+choix+'a').attr('class'); 
	//alert(pcolectif);
	$('#PLC_NUMCOMPTE').val(choix);$('#PLC_CPTECOLLECTIF').val(pcolectif);
	$('#JRN_CONTREPARTIE').val(choix);
	$('#PLC_NUMCOMPTEGENERAUX').val(choix);	
    //$( "input[name=TOP_NUMCOMPTEDEBIT]" ).focus(function() {
       $('#TOP_NUMCOMPTEDEBIT').val(choix);
    //});
    $( "input[name=TOP_NUMCOMPTECREDIT]" ).focus(function() {
       $('#TOP_NUMCOMPTECREDIT').val(choix);
    });
  // document.forms[0].TOP_NUMCOMPTEDEBIT.focus();
    //$(":focus").val(choix);
       // $('#TOP_NUMCOMPTEDEBIT').val(choix);

       
   
        //$('#TOP_NUMCOMPTECREDIT').val(choix);
    
     
	$('#modalform').hide();
	
}
function rechercheCompte(url)
{
    event.preventDefault();  
   // alert($(''+id+'').val());
    var numcompte = $('#numcompte').val();   
    var x = 0;
if(numcompte!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+numcompte,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0){

               $('#tcorps').empty(); $('#tcorps1').empty();   
                  $('p').css({'fontSize':'1000px','letterSpacing':'0.5px','wordSpacing':'-10px','whiteSpace':'nowrap'});          
               $("#btn_initialise").removeAttr("disabled");
               while(x <= data.nb) {
                 $('#tcorps').append('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="" style="border:0px;"><td style="border:0px;"><p style=""><input class="my_checkbox" type="radio" name="choix" value="'+data.last[x]['PLC_NUMCOMPTE']+'" id="'+data.last[x]['PLC_NUMCOMPTE']+'" ><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-file" style="color:black;"></span> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</p></td></tr>');
                $('#tcorps1').append('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class=""><td><input class="my_checkbox" type="checkbox" name="check[]" id="'+data.last[x]['PLC_NUMCOMPTE']+'" > </td><td>' + data.last[x]['PLC_NUMCOMPTE'] + '</td><td><a href ="#"><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-file" style="letter-spacing: 0px;color:black;"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</td>'+
                      '<td class="text-center"><ul class="icons-list"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>'+
                      '<ul class="dropdown-menu dropdown-menu-right"><li><a href="" onclick="updateForm(\'plancomptable/edit/'+data.last[x]['PLC_NUMCOMPTE']+'\')" ><i class="icon-pencil6"></i> Modifier</a> </li>'+
                      '<li><a href ="#" onclick="deleteItem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/delete\',\''+data.url+'\')"><i class="icon-x"></i>Supprimer</a></li></ul></li></ul></td></tr>');
                    
                 x++; 
               }
               
             
            }else{
               alertify.error('Pas de résultats pour cette recherche');
            }
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  }

}
function rechercheCompteEnter(e) {
        if (e.keyCode == 13) {
            $('#btn_numcompte').click();
        }
    }

function initialise(url){
    event.preventDefault(); 
    var x = 0; 
    $.ajax({
        url : url,
        type: "GET",
         data: 'initialise='+'initialise',
        dataType: "JSON",
        success: function(data)
        {
            if(data.status){
               $('#numcompte').val('');
                $('#tcorps').empty();$('#tcorps1').empty();
               while(x <= data.nb) {
                 $('#tcorps').append('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + data.last[x]['PLC_NUMCOMPTE']+'" style="border:0px;"><td style="border:0px;"><input class="my_checkbox" type="radio" name="choix" value="'+data.last[x]['PLC_NUMCOMPTE']+'" id="'+data.last[x]['PLC_NUMCOMPTE']+'" ><a href ="#" onclick="childitem1(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/child\')">'+
                      '<span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-folder-close" style="color:black;"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</span></td></tr>');
                 
                  $('#tcorps1').append('<tr id="' +data.last[x]['PLC_NUMCOMPTE']+ 'a" class="' + data.last[x]['PLC_NUMCOMPTE']+'"><td><input class="my_checkbox" type="checkbox" name="check[]" id="'+data.last[x]['PLC_NUMCOMPTE']+'" > </td><td>' + data.last[x]['PLC_NUMCOMPTE'] + '</td><td><a href ="#"  onclick="childitem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/child\')"><span id="' +data.last[x]['PLC_NUMCOMPTE']+ 'aa" class="glyphicon glyphicon-folder-close" style="color:black;"></span></a> '+ data.last[x]['PLC_NUMCOMPTE'] +' - '+data.last[x]['PLC_LIBELLE']+'</td>'+
                      '<td class="text-center"><ul class="icons-list"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>'+
                      '<ul class="dropdown-menu dropdown-menu-right"><li><a href="" onclick="updateForm(\'plancomptable/edit/'+data.last[x]['PLC_NUMCOMPTE']+'\')"><i class="icon-pencil6"></i> Modifier</a> </li>'+
                      '<li><a href ="#" onclick="deleteItem(\''+data.last[x]['PLC_NUMCOMPTE']+'\',\''+data.url+'/delete\',\''+data.url+'\')"><i class="icon-x"></i>Supprimer</a></li></ul></li></ul></td></tr>');
                       
                 x++; 
               }

            }
        }
    });
}
function  fermer(){
    $('#modalform').hide();
}
function numindividuel(url)
{
    event.preventDefault();  
   // alert($(''+id+'').val());
    var numcompte = $('#AGC_CPTECAISSEAGENCE').val();   
    var x = 0;
if(numcompte!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+numcompte,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0){
              alertify.success('Manci');  
            
            }else{
               alertify.error('Pas de résultats pour cette recherche');
            }
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  }

}
function verifdatnaiss(id){
   event.preventDefault();  
    alert(id);
   }
function saveAffectationPortefeuille( url)
{
    event.preventDefault();
   // var selectHtmlToUpdate ;
    var url =  url;
    //var form ="."+ form;
    var donnees = new Array();
        $("#OPE_DESTINATAIRE .check1").each(function () {
            donnees.push($(this).attr("id"));

        });
        alert(donnees);
    $.ajax({
        url : url,
        type: "POST",
        data: $(form).serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status){
                if(data.beneficiaire){
                   $('#totaltaux').val(data.totaltaux);
                   $('#row_empty').remove(); 
                   if(data.totaltaux<=0){
                     $('#validerbis').remove();   
                   }
                   $('#' + selectHtmlToUpdate).append('<tr id="'+data.nb+'"><td>'+data.nb+'</td><td>'+data.beneficiaire['BEN_NOMBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_PRENOMSBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_DATENAISSANCEBENEFICIAIRE']+'</td><td>'+data.beneficiaire['LEN_CODELIENPARENTE']+'</td><td>'+data.beneficiaire['BEN_TAUXBENEFICIAIRE']+'</td><td>'+data.beneficiaire['BEN_NUMEROPIECEBENEFICIAIRE']+'</td></tr>');  
                   
                }else{
                $('#' + selectHtmlToUpdate).append('<option value="' + data.last[''+data.codes+''] + '" selected="selected">' + data.last[''+data.libelle+''] + '</option>');
                }//$('#modal_form_horizontal2').hide();
                $('#modal_form_horizontal2').modal('hide');
                alertify.success("Enregistrement effectué avec succès");

            }else{

                console.log(data.errors);
                $.each(data.errors, function (index, value) {
                    //alert(index);

                    alertify.error(value);
                });
            }


//                $('#mo').on('hidden.bs.modal', function() {
//                    this.modal('show');
//                    alert(data);
//
//                });
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alertify.error('Erreur inatendue');

        }
    });
}
function typeCompteChoosen(url, param, param1, CLT_CODECLIENT)
{
    event.preventDefault();    

    $.ajax({
        url : url,
        type: "POST",
        data: 'param='+param+'&param1='+param1+'&CLT_CODECLIENT='+CLT_CODECLIENT,
        dataType: "JSON",
        success: function(data)
        {
              if(data.status){
                  alertify.error("Ce client a déjà un compte pour ce produit");   
                     $('#CPT_NUMCPTE').val("");
                     $('#PLC_NUMCOMPTE').val(''); 
                     $('#PLC_LIBELLE').val('');                      
                     $('#CPT_CODEPRODUIT').val('');
                     
                }else{                    
                     $('#PLC_NUMCOMPTE').val(data.dataforfield['PLC_NUMCOMPTE']); 
                     $('#PLC_LIBELLE').val(data.dataforfield['PLC_LIBELLE']);        
                     $('#CPT_NUMCPTE').val(data.numcompteclt);
                     $('#CPT_CODEPRODUIT').val(data.CPT_CODEPRODUIT);
               }
                   
              
//               alert(data.numcompteclt);
               $('.close').click();
             //  alert(data.dataforfield['numcompteclt']);
            
        }
    });
  
   
    
}
function findAccount(url,CPT_NUMCPTE)
{
    event.preventDefault();    

    $.ajax({
        url : url,
        type: "POST",
        data: 'CPT_NUMCPTE='+CPT_NUMCPTE,
        dataType: "JSON",
        success: function(data)
        {
          
              // $('#PLC_NUMCOMPTE').val(data.account['PLC_NUMCOMPTE']); 
               $('#CLT_CODECLIENT').val(data.account['CPT_NUMCPTE']); 
               $('#CPT_MONTANTBLOQUE').val(data.account['CPT_MONTANTBLOQUE']); 
               $('.close').click();
            
            
        }
    });
  
   
    
}
function saveCombinaisonSignature(url)
{  event.preventDefault();    
   var CPT_NUMCPTE =  $('#CPT_NUMCPTE').val().trim();   
   var CLT_CODECLIENT =  $('#CLT_CODECLIENT').val().trim();
   var SIG_NUMEROSIGNATAIRE =  $('#SIG_NUMEROSIGNATAIRE').val().trim();
   var CMB_TYPESIGNATAIRES =  $('#CMB_TYPESIGNATAIRES').val().trim();
   var CMB_COMBINAISON =  $('#CMB_COMBINAISON').val().trim();
  
  if(CPT_NUMCPTE!="" && CLT_CODECLIENT!="" && SIG_NUMEROSIGNATAIRE!="" && CMB_TYPESIGNATAIRES!="" && CMB_COMBINAISON){
    $.ajax({
        url : url,
        type: "POST",
        data: {CPT_NUMCPTE:CPT_NUMCPTE,CLT_CODECLIENT:CLT_CODECLIENT,SIG_NUMEROSIGNATAIRE:SIG_NUMEROSIGNATAIRE,CMB_TYPESIGNATAIRES:CMB_TYPESIGNATAIRES,CMB_COMBINAISON:CMB_COMBINAISON},
        dataType: "JSON",
        success: function(data)
        {
            if(data.status==1){
              alertify.error("Ce compte est inexistant");
            }else if(data.status==2){
               alertify.error("Cette combinaison existe déjà"); 
            }else if(data.status==3){
               alertify.success("Enregistrement effectué avec succès"); 
            }else{
                
            }
        }
    });
  }else{
     alertify.error("Au moin un paramètre est absent");  
  }
}
function plc_typecpte(url,champ,typechamp)
{
    event.preventDefault();   
    var compte = $('#'+champ).val().trim(); 
    
    if(compte!=''){
    $.ajax({
        url : url,
        type: "POST",
        data: 'numcompte='+compte+'&typechamp='+typechamp,
        dataType: "JSON",
        success: function(data)
        {
            if(data.nb!=0){
              $('#'+champ).val(compte);

            }else{
                $('#'+champ).val(''); 
               (typechamp==='I') ? alertify.error('Ce compte ne correspond pas à un compte individuel'): alertify.error('Ce compte ne correspond pas à un compte collectif');
            }
        }
    });
  }else{
    alertify.error('Vous n\'avez pas saisi de caractères');
  } 
   
    
}
//DAT
function listDAT(URL, STATE,ACCOUNT, TYPECONTRACT, BEGIN, END) {
var x=0;//style="margin-bottom:-20px;padding:0"
 $.ajax({
        url : URL,
        type: "POST",
        data: {STATE:STATE, ACCOUNT:ACCOUNT, TYPECONTRACT:TYPECONTRACT,BEGIN:BEGIN,END:END},
        dataType: "JSON",
        success: function(data)
        {
            if(data.nbDAT!=0){                
                $('#LIST_DAT').empty();
                while( x<data.nbDAT ){
                    $('#LIST_DAT').append('<tr id="'+data.lists[x]['DAT_NUMDAT']+'" class="clickable-row" onclick="showDAT(\''+data.url+''+data.lists[x]['DAT_NUMDAT']+'\')" ><td style=""><input style="margin-botton:-10px;margin-top:-10px;" class="my_checkbox" type="checkbox" name="check[]" value="'+data.lists[x]['DAT_NUMDAT']+'" id="'+data.lists[x]['DAT_NUMDAT']+'" ><span id="" class="">'+data.lists[x]['DAT_NUMDAT']+'</span></td><td>'+data.lists[x]['CPT_NUMCPTE']+'</td><td>'+data.lists[x]['COMPTE']['CPT_INTITULE']+'</td><td>'+data.lists[x]['DAT_MONTANT']+'</td></tr>');
                    //alert(data.lists[x]['DAT_MONTANT']);
                    x++;
                }
                showDAT(data.url+''+data.dat1['DAT_NUMDAT']);
            }else{
                x=0;
                $('#LIST_DAT').empty();
                while( x<7 ){
                    $('#LIST_DAT').append('<tr class="" ><td style=""></td><td></td><td></td><td></td></tr>');
                    x++;
                }
                alertify.error('Aucun DAT trouvé');                
            }
        }
   });
}    

function showDAT(URL){
    event.preventDefault();
    //alert(URL); 
      $.ajax({
          url:URL,
        type: 'GET',
        dataType: "JSON",
        
        success: function (data) {
           // alert(data.dat['DAT_PERIODICITE']);
            //First Column
            $("#DAT_DEPOTINITIAL").val(data.dat['DAT_DEPOTINITIAL']);
            $("#DAT_MONTANT").val(data.dat['DAT_MONTANT']);
            $("#DAT_PERIODICITE").val(data.periodicite[data.dat['DAT_PERIODICITE']]);
            $("#DAT_RENOUVELABLE").val(data.renouvellable[data.dat['DAT_RENOUVELABLE']]);
            (data.dat['DAT_RENOUVELABLE']=="N")?$("#DAT_NBRENOUVELABLE").val(0):$("#DAT_NBRENOUVELABLE").val(data.dat['DAT_NBRENOUVELABLE']);
            $("#DAT_COMPTE").val(data.dat['DAT_COMPTE']);
            //Second Column
            $("#DAT_DATEDEBUT").val(data.dat['DAT_DATEDEBUT']);
            $("#DAT_DATEFIN").val(data.dat['DAT_DATEFIN']);
            $("#DAT_DUREE").val(data.dat['DAT_DUREE']);
            $("#DAT_TAUXINT").val(data.dat['DAT_TAUXINT']);
            $("#DAT_TAUXPENALITE").val(data.dat['DAT_TAUXPENALITE']);
            $("#DAT_SOLDE").val(data.dat['DAT_MONTANT']);
            //Third Column
            $("#DAT_DATEDEBUTCAL").val(data.dat['DAT_DATEDEBUT']);
            $("#DAT_DATEFINCAL").val(data.today);
            $("#DAT_DUREEEC").val(data.other['dureeEc']);
            $("#DAT_DUREEECAC").val(data.other['dureeCac']);
            $("#DAT_TAUXINT").val(data.dat['DAT_TAUXINT']);
            (data.dat['DAT_RENOUVELABLE']=="N")?$("#DAT_RENOUVELLEMENTREST").val(0):$("#DAT_RENOUVELLEMENTREST").val(data.dat['DAT_NBRENOUVELABLE']);
           // $("#DAT_RENOUVELLEMENTREST").val(data.dat['DAT_TAUXPENALITE']);
            $("#DAT_MONTINTERET").val(data.dat['DAT_MONTINTERET']);
            $("#DAT_MONTPENAT").val(data.dat['DAT_MONTPENAT']);
            //Header 
//            $("#DAT_DATEDEBUT1").val(data.headerDATE['DAT_DATEDEBUT']);
//            $("#DAT_DATEFIN1").val(data.headerDATE['DAT_DATEFIN']);
            
            //Select row clicked
            if(false == $(".my_checkbox#"+data.dat['DAT_NUMDAT']).prop("checked")){
                $(".my_checkbox#"+data.dat['DAT_NUMDAT']).prop('checked', true);
                $("tr #"+data.dat['DAT_NUMDAT']).css({backgroundColor : 'grey',});
             }else{
                $(".my_checkbox#"+data.dat['DAT_NUMDAT']).prop('checked', false);
            }
            $("tr").css('fontWeight' , 'normal');
            $("tr#"+data.dat['DAT_NUMDAT']).css('fontWeight' , 'bold');
        }
    });
   
}
// Ordre de virement
function listOdreVirement(URL, OVI_ETATVIREMENT,AGC_CODEAGENCE, PLC_NUMCPTE) {
var x=0;
 $.ajax({
        url : URL,
        type: "POST",
        data: {OVI_ETATVIREMENT:OVI_ETATVIREMENT, AGC_CODEAGENCE:AGC_CODEAGENCE, PLC_NUMCPTE:PLC_NUMCPTE},
        dataType: "JSON",
        success: function(data)
        {
            if(data.nbORD!=0){                
                $('#LIST_ORDRE').empty();
                while( x<data.nbORD ){
                    $('#LIST_ORDRE').append('<tr id="'+data.lists[x]['OVI_BORDEREAU']+'" class="clickable-row" onclick="showORD(\''+data.url+''+data.lists[x]['OVI_BORDEREAU']+'\')" ><td style=""><input style="margin-botton:-10px;margin-top:-10px;" class="my_checkbox" type="checkbox" name="check[]" value="'+data.lists[x]['OVI_BORDEREAU']+'" id="'+data.lists[x]['OVI_BORDEREAU']+'" ><span id="" class="">'+data.lists[x]['OVI_BORDEREAU']+'</span></td><td>'+data.lists[x]['OVI_NUMCPTECLIENT']+'</td><td>'+data.lists[x]['NOMCOMPLET']+'</td><td>'+data.lists[x]['OVI_SENS']+'</td><td>'+data.lists[x]['OVI_PERIODICITE']+'</td></tr>');
                    
                    x++;
                }
                showORD(data.url+''+data.ord1['OVI_BORDEREAU']);
            }else{
                x=0;
                $('#LIST_ORDRE').empty();
                while( x<7 ){
                    $('#LIST_ORDRE').append('<tr class="" ><td style=""></td><td></td><td></td><td></td></tr>');
                    x++;
                }
                alertify.error('Aucun Ordre de virement trouvé');                
            }
        }
   });
}
function listOdreSuspension(URL, OVI_ETATORDRE) {
var x=0;
 $.ajax({
        url : URL,
        type: "POST",
        data: {OVI_ETATORDRE:OVI_ETATORDRE},
        dataType: "JSON",
        success: function(data)
        {
            if(data.nbORD!=0){                
                $('#LIST_ORDRE').empty();
                $("#OVI_ACTION").val("0").change();
                while( x<data.nbORD ){
                    $('#LIST_ORDRE').append('<tr id="'+data.lists[x]['OVI_BORDEREAU']+'" class="clickable-row"  ><td style=""><input style="margin-botton:-10px;margin-top:-10px;" class="my_checkbox" type="checkbox" name="check[]" value="'+data.lists[x]['OVI_BORDEREAU']+'" id="'+data.lists[x]['OVI_BORDEREAU']+'" ><a class="grille" onclick="showORD(\''+data.url+''+data.lists[x]['OVI_BORDEREAU']+'\')"><span id="" class="">'+data.lists[x]['OVI_BORDEREAU']+'</span></a></td><td><a class="grille" onclick="showORD(\''+data.url+''+data.lists[x]['OVI_BORDEREAU']+'\')">'+data.lists[x]['OVI_NUMCPTECLIENT']+'</a></td></tr>');
                    
                    x++;
                }
                showORD(data.url+''+data.ord1['OVI_BORDEREAU']);
            }else{
                x=0;
                $('#LIST_ORDRE').empty();
                $('#LIST_ORDREDET').empty();
                $("#OVI_TYPEVIREMENT").val(0);$("#OVI_MONTANT").val(0);$("#OVI_FRAIS").val(0);$("#OVI_SENS").val(0);$("#OVI_PERIODICITE").val(0);
                $("#OVI_DATEDEBUT").val(0);$("#OVI_DUREE").val(0);$("#OVI_TOMBEE").val(0);$("#OVI_DATEFIN").val(0);$("#OVI_DATEMODIF").val(0);
    
                while( x<7 ){
                    $('#LIST_ORDRE').append('<tr class="" ><td style=""></td><td></td><td></td><td></td></tr>');
                    x++;
                }
                alertify.error('Aucun Ordre de virement trouvé');                
            }
        }
   });
}

function showORD(URL){
    event.preventDefault();
    //alert(URL); 
      $.ajax({
          url:URL,
        type: 'GET',
        // data: {ECRAN:ECRAN},
        dataType: "JSON",
        
        success: function (data) {
           // alert(data.dat['DAT_PERIODICITE']);
            //First Column
            $("#OVI_TYPEVIREMENT").val(data.ord['OVI_TYPEVIREMENT']);
            $("#OVI_MONTANT").val(data.ord['OVI_MONTANT']);    
            $("#OVI_FRAIS").val(data.ord['OVI_FRAIS']);
            //Second Column
            $("#OVI_SENS").val(data.ord['OVI_SENS']);
            $("#OVI_PERIODICITE").val(data.periodicite[data.ord['OVI_PERIODICITE']]);
            $("#OVI_DATEDEBUT").val(data.ord['OVI_DATEDEBUT']);
            $("#OVI_DUREE").val(data.ord['OVI_DUREE']);
            $("#OVI_TOMBEE").val(data.ord['OVI_TOMBEE']);
            $("#OVI_DATEFIN").val(data.ord['OVI_DATEFIN']);
           
            //Third Column
             $("#OVI_DATEMODIF").val(data.ord['OVI_DATEMODIF']);
           
            //Select row clicked
            if(false == $(".my_checkbox#"+data.ord['OVI_BORDEREAU']).prop("checked")){
                $(".my_checkbox#"+data.ord['OVI_BORDEREAU']).prop('checked', true);
                
                //alert("MANCI");
             }else{
                 
                $(".my_checkbox#"+data.ord['OVI_BORDEREAU']).prop('checked', false);
            }
            $("tr").css('fontWeight' , 'normal');
            $("tr#"+data.ord['OVI_BORDEREAU']).css('fontWeight' , 'bold');
            //alert("MANCI");
//            if(ECRAN=="suspension" || ECRAN=="prelevement"){
                var x = 0;
                if(data.nbdetail!=0){                
                    $('#LIST_ORDREDET').empty();
                    while( x<data.nbdetail ){
                        $('#LIST_ORDREDET').append('<tr id="'+data.orddetails[x]['DOV_NUMCPTECORESP']+'"   ><td style=""><input style="margin-botton:-10px;margin-top:-10px;" class="my_checkbox" type="hidden" name="check[]" value="" id="" ><span id="" class="">'+data.orddetails[x]['DOV_NUMCPTECORESP']+'</span></td><td>'+data.orddetails[x]['DOV_LIBOPERA']+'</td><td>'+data.orddetails[x]['DOV_MONTANTCORESP']+'</td><td id="'+data.orddetails[x]['DOV_NUMCPTECORESP']+'">'+data.orddetails[x]['DOV_ETATCORESP']+'</td><td><ul class="icons-list"><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>'+
                      '<ul class="dropdown-menu dropdown-menu-right"><li><a href="" onclick="actionOrdreDet(\''+data.orddetails[x]['url']+''+data.action['ENCOUR']+'\')"><i class="icon-play"></i> EN COUR</a> </li>'+
                      '<li><a href ="#" onclick="actionOrdreDet(\''+data.orddetails[x]['url']+''+data.action['SUSPENDRE']+'\')"><i class="icon-pause"></i>SUSPENDRE</a></li></ul></li></ul></td></tr>');

                        x++;
                    }
                    //showORD(data.url+''+data.ord1['OVI_BORDEREAU'],"suspension");
                     }else{
                    x=0;
                    $('#LIST_ORDREDET').empty();
                    while( x<7 ){
                        $('#LIST_ORDREDET').append('<tr class="" ><td style=""></td><td></td><td></td><td></td></tr>');
                        x++;
                    }
                    alertify.error('Aucun Ordre de virement trouvé');                
                }
//                }
        }
    });
   
}

function actionOrdre(URL,ACTION){
    event.preventDefault();
     var donnees = new Array();
     var OVI_ETATORDRE = $("#OVI_ETATORDRE").val();
     var x=0;
     $("input:checked").each(function () {
        donnees.push($(this).attr("id"));
     });
         
      $.ajax({
          url:URL,
         type: 'POST',
         data:{OVI_ETATORDRE:OVI_ETATORDRE, OVI_BORDEREAUS:donnees,ACTION:ACTION},
     dataType:"JSON",        
        success: function (data){
            if(data.nbORD!=0){                
                $('#LIST_ORDRE').empty();
                while( x<data.nbORD ){
                    $('#LIST_ORDRE').append('<tr id="'+data.lists[x]['OVI_BORDEREAU']+'" class="clickable-row"  ><td style=""><input style="margin-botton:-10px;margin-top:-10px;" class="my_checkbox" type="checkbox" name="check[]" value="'+data.lists[x]['OVI_BORDEREAU']+'" id="'+data.lists[x]['OVI_BORDEREAU']+'" ><a class="grille" onclick="showORD(\''+data.url+''+data.lists[x]['OVI_BORDEREAU']+'\')"><span id="" class="">'+data.lists[x]['OVI_BORDEREAU']+'</span></a></td><td><a class="grille" onclick="showORD(\''+data.url+''+data.lists[x]['OVI_BORDEREAU']+'\')">'+data.lists[x]['OVI_NUMCPTECLIENT']+'</a></td></tr>');
                    
                    x++;
                }
                showORD(data.url+''+data.ord1['OVI_BORDEREAU']);
            }else{
                x=0;
                $('#LIST_ORDRE').empty();
                $('#LIST_ORDREDET').empty();
                $("#OVI_TYPEVIREMENT").val(0);$("#OVI_MONTANT").val(0);$("#OVI_FRAIS").val(0);$("#OVI_SENS").val(0);$("#OVI_PERIODICITE").val(0);
                $("#OVI_DATEDEBUT").val(0);$("#OVI_DUREE").val(0);$("#OVI_TOMBEE").val(0);$("#OVI_DATEFIN").val(0);$("#OVI_DATEMODIF").val(0);
    
                while( x<7 ){
                    $('#LIST_ORDRE').append('<tr class="" ><td style=""></td><td></td><td></td><td></td></tr>');
                    x++;
                }
                alertify.error('Aucun Ordre de virement trouvé');                
            }
        },
    });
}
function actionOrdreDet(URL){
    event.preventDefault();
    //alert(URL); 
      $.ajax({
          url:URL,
        type: 'GET',      
        dataType: "JSON",        
        success: function (data) {
            if(data.status){
                $('#LIST_ORDREDET td#'+data.DOV_NUMCPTECORESP).text(data.DOV_ETATCORESP);
                alertify.success('Mise à jour effectuée avec succès');
            }else{
               if(data.DOV_ETATCORESP=="E"){
                    alertify.error('Impossible car ordre de virement suspendu'); 
                }
            }
        },
    });
}