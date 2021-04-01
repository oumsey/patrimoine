@extends('layouts.layout')

@section('content')
<div class="container-fluid">  
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h4 class="page-title">Liste des types de projets</h4>
                                    <ol class="breadcrumb">                                        
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Paramètres</a>
                                        </li>
                                        <li class="breadcrumb-item active">Liste des types de projets</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                <!-- <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                                            <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                        </div> -->
                                <a href="{{ url('/typeprojet/create') }}" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-container="modal-container" >Ajouter un type de projet</a>
                                    <!-- <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">data-target="#myModal"
                                    <i class="mdi mdi-chevron-down mdi-drop"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- <h4 class="mt-0 header-title">Default Datatable</h4>
                                    <p class="sub-title">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                                    </p> -->

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="select_all" /></th>
                                                <th>Code</th>
                                                <th>Libellé</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($typeprojets as $typepro) : ?>
                                            <tr><td><input class="my_checkbox" type="checkbox" name="check[]" id="<?php echo $typepro->TPH_NUM ?>" > </td>
                                                <td>{{$typepro->TPJ_NUM}}</td>
                                                <td>{{$typepro->TPJ_LIB}}</td>  
                                                <td><a href="<?php echo url("typeprojet/$typepro->TPJ_NUM/edit") ?>"  data-toggle="modal" data-container="modal-container"  class="waves-effect waves-light"><i class="typcn typcn-pencil text-success"></i></a>
                                                &nbsp;  | &nbsp;
                                                <a href ="#" data-toggle="tooltip" title="Supprimer!"
                                                                        onclick="deleteItem('<?= $typepro->TPJ_NUM ?>','<?= url("/typeprojet/delete/$typepro->TPJ_NUM") ?>','<?= url("/typeprojet") ?>')">
                                                    <i class="typcn typcn-trash text-danger "></i>
                                                </a>
                                            </td>                                             
                                            </tr>
                                            <?php endforeach;?>                                      
                                        </tbody>
                                        <tfooter>
                                            <tr >
                                                <th colspan="5">
                                                    <button type="button" onclick="deleteItems('<?= url("/typeprojet/deletes") ?>', '<?= url("/typeprojet") ?>')" class="btn btn-danger btn-icon btn-rounded" id="btn_delete_all">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </th>
                                                
                                            </tr>
                                        </tfooter>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    
                    <!-- end row -->

                 <!-- container-fluid -->
                 <div class="modal fade" id="modal-container"></div>
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> fe</div>
                </div>
               
<script></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
@endsection