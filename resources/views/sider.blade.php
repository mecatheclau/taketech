<div>
    <ul class="nav flex-column">
        <li class="nav-item" style="font-size: 40px">
        <a class="nav-link active" href="{{url('home')}}" style="color: #ffffff">
            <span data-feather="home" ></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('bankslip.create') }}" class="w-100 nav-link">
                <span data-feather="file"></span>Record-slip
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('checkpayment/viewslip') }}">check-payment</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-file"></i> Message
        </a>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-bell"></i> notification
        </a>
        </li>
    </ul>
</div>