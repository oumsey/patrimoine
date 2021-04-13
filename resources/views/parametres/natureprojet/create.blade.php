 <!-- sample modal content 

 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->                                            
 <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <?php empty($natureprojet) ? $uri ="/natureprojet/store" : $uri = "/natureprojet/update";?>
                            <form  method="post" action="{{ url($uri) }}" id="form" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myModalLabel">NATURE PROJET</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                                <div class="col-md-4">  
                                                    <div class="form-group">
                                                        <label for="NPJ_NUM" class="control-label">Code  :</label>
                                    <!--                    <div class="col-sm-9">                        -->
                                                            <input type="text"  name="NPJ_NUM" id="NPJ_NUM" class="form-control form-control-rounded" readonly="readonly"
                                                                data-rule-maxlength ='5'
                                                                value="<?= isset($natureprojet) ?  $natureprojet->NPJ_NUM : "" ; ?>"
                                                                
                                                            autofocus>
                                                           
                                    <!--                    </div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <div class="form-group">
                                                        <label for="NPJ_LIB" class="control-label">Libéllé <span class="text-danger">*</span> :</label>
                                                        <!--<div class="col-sm-12">-->
                                                            <input type="text" name="NPJ_LIB" id="NPJ_LIB" class="form-control form-control-rounded"
                                                                required="required"
                                                                value="<?= isset($natureprojet) ?  $natureprojet->NPJ_LIB : "" ; ?>"
                                                                                            data-rule-remote="<?php //echo url('categorie/exists') ?>?table=categorie&column=NPJ_LIB<?//=  !empty($typerubrique) ? '&key=TRB_LIB&value='.$typerubrique->TRB_LIB : '' ;?>"
                                                                data-msg-remote="Le code est déja enregistré."
                                                            >
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <div class="form-group">
                                                        <label for="TPJ_NUM" class="control-label">Type de projet<span class="text-danger">*</span> :</label>
                                                        <select name="TPJ_NUM" id="TPJ_NUM" class="form-control form-control-rounded"
                                                                required="required">
                                                            <option value="">Sélectionnez</option>
                                                            @foreach($typeprojet as $type)
                                                            <option <?php if(isset($natureprojet)) if($natureprojet->TPJ_NUM==$type->TPJ_NUM) echo'selected' ?> value="{{$type->TPJ_NUM}}"><?php echo $type->TPJ_LIB; ?></option>
                                                            @endforeach
                                                        </select>

                                                        <!--<div class="col-sm-12">-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <?php if(empty($natureprojet)) : ?>
                                    <button type="button" class="btn btn-secondary waves-effect" onclick="save('<?php echo url('/natureprojet/store')?>','form')"><i class="fa fa-times"></i> Valider & nouveau</button>
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