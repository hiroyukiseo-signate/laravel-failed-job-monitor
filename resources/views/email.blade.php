
<h1>
    Job failed found!!
</h1>
@if(is_array($failedJobs))
<ul>
@foreach( $failedJobs as $failedJob)
    <li>
        {{ $failedJob->command }} - {{ $failedJob->failed_at->toDateTimeString() }}
    </li>
@endforeach
</ul>
@else
<div>
    {{ $failedJobs }}  - {{ Carbon\Carbon::now() }}
</div>

@endif