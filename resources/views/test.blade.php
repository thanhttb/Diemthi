<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>  

   <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script> 

<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
<a href="#" id="industryName" data-type="text" data-pk="2" data-title="Edit industry">sdf</a>

<script type="text/javascript">
 $(document).ready(function() {

     $.fn.editable.defaults.mode = 'inline';

       $.fn.editable.defaults.params = function (params) 
       {
        params._token = $("#_token").data("token");
        return params;
       };

     $('#industryName').editable({
                validate: function(value) {
                                            if($.trim(value) == '') 
                                                return 'Value is required.';
                                            },
                type: 'text',
                url:'/updateIndustry',   
                send:'always',
                ajaxOptions: {
                dataType: 'json'
                }

                } );
 } );

	  	</script>	