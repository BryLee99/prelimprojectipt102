<div class="container">
    
    <h1>IPT102 Prelim Project</h1>
<hr>
    <div>
    <h3>Welcome {{$user->name}}!</h3>

    <p>
        Thank you for registering to our website. click the link below 
        for verification
    </p>
<hr>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">
        Click Here
    </a>
</div>