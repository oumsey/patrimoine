 <!-- sample modal content 

 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->                                            
 <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <?php empty($commune) ? $uri ="/commune/store" : $uri = "/commune/update";?>
                            <form  method="post" action="{{ url($uri) }}" id="form" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myModalLabel">COMMUNES</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                                <div class="col-md-5">  
                                                    <div class="form-group">
                                                        <label for="COM_NUM" class="control-label">Code  :</label>
                                    <!--                    <div class="col-sm-9">                        -->
                                                            <input type="text"  name="COM_NUM" id="COM_NUM" class="form-control form-control-rounded" readonly="readonly"
                                                                data-rule-maxlength ='5'
                                                                value="<?= isset($commune) ?  $commune->COM_NUM : "" ; ?>"
                                                                
                                                            autofocus>
                                                           
                                    <!--                    </div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-7"> 
                                                    <div class="form-group">
                                                        <label for="COM_NOM" class="control-label">Nom <span class="text-danger">*</span> :</label>
                                                        <!--<div class="col-sm-12">-->
                                                            <input type="text" name="COM_NOM" id="COM_NOM" class="form-control form-control-rounded"
                                                                required="required"
                                                                value="<?= isset($commune) ?  $commune->COM_NOM : "" ; ?>"
                                                                                            data-rule-remote="<?php //echo url('categorie/exists') ?>?table=categorie&column=COM_NOM<?//=  !empty($typerubrique) ? '&key=TRB_LIB&value='.$typerubrique->TRB_LIB : '' ;?>"
                                                                data-msg-remote="Le code est déja enregistré."
                                                            >
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5"> 
                                                    <div class="form-group">
                                                        <label for="COM_DESCR" class="control-label">Description <span class="text-danger">*</span> :</label>
                                                        <!--<div class="col-sm-12">-->
                                                            <input type="text" name="COM_DESCR" id="COM_DESCR" class="form-control form-control-rounded"
                                                                required="required"
                                                                value="<?= isset($commune) ?  $commune->COM_DESCR : "" ; ?>"
                                                                                            data-rule-remote="<?php //echo url('categorie/exists') ?>?table=categorie&column=COM_DESCR<?//=  !empty($typerubrique) ? '&key=TRB_LIB&value='.$typerubrique->TRB_LIB : '' ;?>"
                                                                data-msg-remote="Le code est déja enregistré."
                                                            >
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-7"> 
                                                    <div class="form-group">
                                                        <label for="VIL_NUM" class="control-label">Ville<span class="text-danger">*</span> :</label>
                                                        <select name="VIL_NUM" id="VIL_NUM" class="form-control form-control-rounded"
                                                                required="required">
                                                            <option value="">Sélectionnez</option>
                                                            @foreach($ville as $vil)
                                                            <option <?php if(isset($commune)) if($commune->VIL_NUM==$vil->VIL_NUM) echo'selected' ?> value="{{$vil->VIL_NUM}}"><?php echo $vil->VIL_NOM; ?></option>
                                                            @endforeach
                                                        </select>

                                                        <!--<div class="col-sm-12">-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <?php if(empty($commune)) : ?>
                                    <button type="button" class="btn btn-secondary waves-effect" onclick="save('<?php echo url('/commune/store')?>','form')"><i class="fa fa-times"></i> Valider & nouveau</button>
                                    <button type="submit" class="btn btn-success form-control-rounded"><i class="fa fa-check-square-o"></i> Valider & quitter</button>
                                    <?php else: ?>
                                     <button type="submit" class="btn btn-success form-control-rounded"> Modifier <i class="fa fa-check-square-o"></i> </button>
                                <?php endif; ?>
                                            <!--   <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>-->
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                
                <!-- /.modal
</div>  --> 