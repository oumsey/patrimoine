@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Liste des Phases</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Paramètres</a>
                        </li>
                        <li class="breadcrumb-item active">Liste des Phases</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block app-datepicker">
                    <a href="{{ url('/phase/create') }}" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-container="modal-container" >Ajouter une Phase</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="select_all" /></th>
                                <th>Code</th>
                                <th>Phase</th>
                                <th>Taux</th>
                                <th>Type de la Phase</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($phases as $phas) : ?>
                                <tr><td><input class="my_checkbox" type="checkbox" name="check[]" id="<?php echo $phas->PHA_NUM ?>" > </td>
                                    <td>{{$phas->PHA_NUM}}</td>
                                    <td>{{$phas->PHA_NOM}}</td>
                                    <td>{{$phas->PHA_TAUX}}</td>
                                    <td>{{$phas->typephase->TPH_LIB}}</td>  
                                    <td><a href="<?php echo url("phase/$phas->PHA_NUM/edit") ?>"  data-toggle="modal" data-container="modal-container"  class="waves-effect waves-light"><i class="typcn typcn-pencil text-success"></i></a>
                                                &nbsp;  | &nbsp;
                                    <a href ="#" data-toggle="tooltip" title="Supprimer!"
                                                                        onclick="deleteItem('<?= $phas->PHA_NUM ?>','<?= url("/phase/delete/$phas->PHA_NUM") ?>','<?= url("/phase") ?>')">
                                    <i class="typcn typcn-trash text-danger "></i>
                                    </a>
                                    </td>                                             
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfooter>
                            <tr >
                                <th colspan="5">
                                    <button type="button" onclick="deleteItems('<?= url("/phase/deletes") ?>', '<?= url("/phase") ?>')" class="btn btn-danger btn-icon btn-rounded" id="btn_delete_all"><i class="fa fa-trash"></i>
                                    </button>
                                </th>
                            </tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-container"></div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> fe</div>
</div>          
<script></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
@endsection