<!doctype html>
<html>

<head>
<x-layouts.website.websiteheader/>
<x-layouts.website.websiteheaderlibrary/>
</head>

<body>
<div class="m-0 min-h-min ">
<x-layouts.website.websitenavbar/>

{{ $slot }}

<!--footer start-->
<x-layouts.website.websitefooter/>

</div>
</body>
</html>
