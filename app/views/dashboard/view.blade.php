<!DOCTYPE html>
<html>
<title>{{ Auth::user()->firstname }}'s Resume</title>
<a href="/dashboard" style="color: white; position: absolute; right: 20px; top: 10px; z-index: 5">back</a>
<xmp theme="united" style="display:none;">{{ Auth::user()->resume }}</xmp>

<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>
