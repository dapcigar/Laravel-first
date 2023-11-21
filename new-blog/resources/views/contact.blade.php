@extends('layouts.app')

@section('content')

<h1> Contact US </h1>

<form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
            
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject">
            
        </div>

        

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="Message"  name="message" placeholder="Enter Message" rows="3"></textarea>
        </div>
        
</form>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

