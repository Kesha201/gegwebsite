Hello <i>{{ $demo -> receiver }}</i>
<p>This is a demo email for testing purposes! Also, it's the HTML version.</p>
 
<p><u>Demo object values:</u></p>

 <div>
 <p><b>Demo One:</b>{{ $demo->demo_one}}</p>
 <p><b>Demo Two:</b>{{ $demo->demo_two}}</p>
 </div>

 <p><u>Values passed by with method:</u></p>

 <div>
 <p><b>testVarOne:</b>{{ $testVarOne }}</p>
 <p><b>testVarTwo:</b>{{ $testVarTwo }}</p>
 </div>

 Thank You,
 <br/>
 <i>{{ $demo->sender }}</i>