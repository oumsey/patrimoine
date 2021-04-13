 <!-- sample modal content 

 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> -->                                            
 <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <?php empty($phase) ? $uri ="/phase/store" : $uri = "/phase/update";?>
                            <form  method="post" action="{{ url($uri) }}" id="form" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myModalLabel">PHASES</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                                <div class="col-md-5">  
                                                    <div class="form-group">
                                                        <label for="PHA_NUM" class="control-label">Code  :</label>
                                    <!--                    <div class="col-sm-9">                        -->
                                                            <input type="text"  name="PHA_NUM" id="PHA_NUM" class="form-control form-control-rounded" readonly="readonly"
                                                                data-rule-maxlength ='5'
                                                                value="<?= isset($phase) ?  $phase->PHA_NUM : "" ; ?>"
                                                                
                                                            autofocus>
                                                           
                                    <!--                    </div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-7"> 
                                                    <div class="form-group">
                                                        <label for="PHA_NOM" class="control-label">Nom <span class="text-danger">*</span> :</label>
                                                        <!--<div class="col-sm-12">-->
                                                            <input type="text" name="PHA_NOM" id="PHA_NOM" class="form-control form-control-rounded"
                                                                required="required"
                                                                value="<?= isset($phase) ?  $phase->PHA_NOM : "" ; ?>"
                                                                                            data-rule-remote="<?php //echo url('categorie/exists') ?>?table=categorie&column=PHA_NOM<?//=  !empty($typerubrique) ? '&key=TRB_LIB&value='.$typerubrique->TRB_LIB : '' ;?>"
                                                                data-msg-remote="Le code est déja enregistré."
                                                            >
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5"> 
                                                    <div class="form-group">
                                                        <label for="PHA_TAUX" class="control-label">Taux<span class="text-danger">*</span> :</label>
                                                        <!--<div class="col-sm-12">-->
                                                            <input type="text" name="PHA_TAUX" id="PHA_TAUX" class="form-control form-control-rounded"
                                                                required="required"
                                                                value="<?= isset($phase) ?  $phase->PHA_TAUX : "" ; ?>"
                                                                                            data-rule-remote="<?php //echo url('categorie/exists') ?>?table=categorie&column=PHA_TAUX<?//=  !empty($typerubrique) ? '&key=TRB_LIB&value='.$typerubrique->TRB_LIB : '' ;?>"
                                                                data-msg-remote="Le code est déja enregistré."
                                                            >
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                                <div class="col-md-7"> 
                                                    <div class="form-group">
                                                        <label for="TPH_NUM" class="control-label">Type de Phase<span class="text-danger">*</span> :</label>
                                                        <select name="TPH_NUM" id="TPH_NUM" class="form-control form-control-rounded"
                                                                required="required">
                                                            <option value="">Sélectionnez</option>
                                                            @foreach($typephase as $tph)
                                                            <option <?php if(isset($phase)) if($phase->TPH_NUM==$tph->TPH_NUM) echo'selected' ?> value="{{$tph->TPH_NUM}}"><?php echo $tph->TPH_LIB; ?></option>
                                                            @endforeach
                                                        </select>

                                                        <!--<div class="col-sm-12">-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <?php if(empty($phase)) : ?>
                                    <button type="button" class="btn btn-secondary waves-effect" onclick="save('<?php echo url('/phase/store')?>','form')"><i class="fa fa-times"></i> Valider & nouveau</button>
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