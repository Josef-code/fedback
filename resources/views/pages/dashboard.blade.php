@extends('layouts.default')

@section('content')

<div class="dashboard-section h-100 mt-4">
	<div class="d-flex">
		<h2 class="pt-4 logotext">Welcome</h2>
		<div class="ms-auto p-2">
			<a href="" style="text-decoration: none; background-color: black; color: white; padding: 10px; border-radius: 4px;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create inbox</a>
			<a href="{{ route('logout') }}" style="text-decoration: none; background-color: black; color: white; padding: 10px; border-radius: 4px;" >Logout</a>
		</div>
	</div>
	
	<table class="table table-striped table-hover mt-5">	
	  <thead> 	
	    <tr>
	      <th scope="col">Mailbox</th>
	      <th scope="col">No. of messages</th>
	      <th scope="col">Mail link</th>
	      <th scope="col">Date created</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Mark party</td>
	      <td>250</td>
	      <td>bit.ly/yw374</td>
	      <td>14th May, 2022</td>
	      <td><button type="button" class="btn btn-primary">Open mail</button></td>
	    </tr>
	  </tbody>
	</table>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">New mail</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="mb-3">
	            <label for="recipient-name" class="col-form-label">Mail name:</label>
	            <input type="text" class="form-control" id="recipient-name">
	          </div>
	          <div class="mb-3">
	            <label for="message-text" class="col-form-label">Description(optional):</label>
	            <textarea class="form-control" id="message-text"></textarea>
	          </div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Create mail</button>
	      </div>
	    </div>
	  </div>
	</div>
@stop