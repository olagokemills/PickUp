
</div>

<div class="w3copyright-agile"><hr />
		<p>© 2017 Pick Up</p>

        <span id="foot">

        <ul>
        <li><a href="contact.php">Contact</a></li>

        <li><a href="about.php">About</a></li>
        </ul>

        </span>

	</div>


    <script type="text/javascript">
        
        $(document).ready(function(){

            function check(){


                if($.trim($("#name,#phone, #location, #destination").val())=== " "){

                    e.preventDefault();
                    alert('You didnt enter any of the required details');





                };

            }

        })

    </script>
	

<script type="text/javascript">
    	$(document).ready(function(){
    		$('#request').click(function(event){


                $(document).ready(function(){

                    $(check());
                });

              

    			event.preventDefault();
    			$("#uploadIm").show();
    		$.ajax({
    			url:"process_request.php",
    			method: "post",
    			data:$('form').serialize(),
    			dataType:"text",
    			success:function(strMessage){
                    
                    $("#uploadIm").hide();
    				$('#remessage').text(strMessage)
    			}
    		})
    		})
    	})
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#contact').click(function(event){

                event.preventDefault();
                $("#uploadIm").show();
            $.ajax({
                url:"process_contat.php",
                method: "post",
                data:$('form').serialize(),
                dataType:"text",
                success:function(strMessage){
                    $("#uploadIm").hide();
                    $('#remessage').text(strMessage)
                }
            })
            })
        })
    </script>



    

</body>
</html>