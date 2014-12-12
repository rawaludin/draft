@extends('layouts.backend')

@section('content')
	    {{ Datatable::table()
		    ->addColumn('id','name', 'role')
		    ->setOptions('aoColumnDefs',array(
		        array(
		            'bVisible' => false,
		            'aTargets' => [0]),
		        array(
		            'sTitle' => 'Name',
		            'aTargets' => [1]),
		        array(
		            'sTitle' => 'Role',
		            'aTargets' => [2]))
		    )
		    ->setOptions('bProcessing', true)
		    ->setUrl(route('admin.users.index'))   // this is the route where data will be retrieved
		    ->render() }}
@stop
