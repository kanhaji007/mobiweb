<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

        </div><!-- #main -->
        <footer id="footer" class="footer_sec back_color2" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="ftr_box">
                        <?php echo ot_get_option('about_us'); ?>
                    </div>
                </div> 
                <div class="col-md-4 col-sm-4">
                    <div class="ftr_box">
                        <!-- <h2>Contact Us</h2> -->
                        <div class="ftr_form">
                         <?php dynamic_sidebar('contact-form');?>
                        </div>
                     </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="sosial_ftr">
                        <?php echo ot_get_option('social_icon'); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ftr_nav1">
                    <?php wp_nav_menu( array( 'theme_location' => 'footermenu', 'menu_class' => 'ftr_nav', 'menu_id' => 'footer-menu' ) ); ?>
                        
                    </div>
                </div>
            </div>
    <div class="footer-terms-text" id="text" style="display:none">
    <?php echo ot_get_option('impressum'); ?>
    </div>
    <div class="footer-terms-text" id="text1" style="display:none">
    <?php echo ot_get_option('abg'); ?>
    </div>
    <div class="footer-terms-text" id="text2" style="display:none">
    <h2>Datenschutz</h2>
    <?php echo ot_get_option('datenschutz'); ?>
    </div>   
    </footer>

    </div><!-- #page -->

    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/moments.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/datepicker.min.js"></script>
    
    

<script>
    $(document).ready(function(){
      var jay = 1;
      var counter = 1;
      $(".append_form_clk").click(function(){     
          var append ='<div class="row" id="append_form">';
          append +='<div class="col-md-4">';
          append +='<div class="form_left">';
          append +='<div class="date_time_box">';
          append +='<div class="form-contact">';
          append +='<label class="label-control" for="datetime_'+jay+'">Datum und Uhrzeit</label><input class="mydate form-control" type="text" name="mydate_'+jay+'[]" id="datetime_'+jay+'">'; 
          append +='<div class="append_date append_'+jay+'"></div>';
          //append +='<div class="add_box" id="add_date_time">';
          append +='<a href="javascript:void(0)" class="add_date add_dt dateid_'+jay+'" id="plusbtn_'+jay+'"><span class="plus_box"> + </span>Weiteres Datum und Uhrzeit hinzufügen</a></div>';
          append +='<div class="form-contact">';
          append +='<label class="label-control" for="">Absenderadresse der E-Mail oder Telefonnummer des Anrufers</label><input type="text" name="myemail[]" id="sur_'+jay+'" class="maileremail form-control error_message"/><span style="display:none;" class="wpcf7-not-valid-tip">Bitte füllen Sie dieses Pflichtfeld aus!</span></div>';
          append +='<div class="form-contact">';
          append +='<label class="label-control" for="">Name des Anrufers oder Absenders</label><input type="email" name="mytext[]"  class="mailername form-control error_message"/><span style="display:none;" class="wpcf7-not-valid-tip">Bitte füllen Sie dieses Pflichtfeld aus!</span></div>';
          append +='<div class="upload_box"><input type="file" name="myfile'+jay+'"class="browseme fileup label-control"/></div>';
          append +='<span class="notefile">HINWEIS: Handelt es sich um E-Mail-Spam, machen Sie bitte einen Screenshot von der E-Mail und laden diesen zur Beweissicherung hier hoch. Löschen Sie die betreffende E-Mail vorerst nicht, da auch beispielsweise Headerinformationen später noch von Bedeutung sein können.</span>';
          append +='<div class="describe_anthr"  id="plus_form"> <span class="plus_box-">  </span> </div></div></div>';
          append +='<div class="remove_form"><a href="#"><span class="plus_box">-</span>Weiteren Fall entfernen</a></div>';
          append +='</div>';
          append +='<div class="col-md-8"><div class="form_right"><h4>Bitte beschreiben Sie uns kurz Ihren Fall </h4><div class="form-group"><textarea name="mytextarea[]"col="10" row="40" class="writeus form-control error_message" id="" placeholder=""></textarea>';
          append +='<span style="display:none;" class="wpcf7-not-valid-tip">Bitte füllen Sie dieses Pflichtfeld aus!</span></div></div></div></form></div>';
         
        $("#TextBoxDiv1").append(append);
        $('#datetime_'+jay).datetimepicker();
        
        
      jay++;

    });

     var subdte = 0;
     $('body').on('click', '.add_dt', function(){
        //alert("aaksah");
        
        var id = $(this).attr('id');
        //alert(id);
        console.log(id); 
        var res = id.split("_");
        // res[1]
        var appenddate ='<div class="remove_prnt"><label class="mydate label-control" for="subdate_'+subdte+'">Datum und Uhrzeit</label>';
             appenddate +='<input class="mydate form-control" type="text" name="mydate_'+res[1]+'[]" placeholder="MM/DD/YYYY HH:MM.">';
             appenddate +='<a class="remove_date" href="#"><span class="plus_box">-</span>Weiteres Datum und Uhrzeit entfernen</a></div>';
             
        $(".append_"+res[1]).append(appenddate);
        $('#subdate_'+subdte).datetimepicker();
          subdte++;
       }); 

      $('body').on('click', '.remove_form', function(){

             $(this).parent().parent().remove();
           });
            $('body').on('click', '.remove_date', function(){

             $(this).parent().remove();
           });
    });
       
 </script>

 <script type="text/javascript">
            $(function () {
                $('#datetimeh').datetimepicker();
            });
        </script>

 <script type="text/javascript">

        jQuery(document).ready(function($){
            
          var subdate = 0;

          $("body").on('click','.addmain_date',function () {
             var cl = $(this).attr("main");
             var html = "";
             html +='<div class="remove_prnt"><label class="mydate label-control" for="subdate_'+subdate+'">Datum und Uhrzeit</label>';
             html +='<input class="mydate form-control" type="text" name="mydate[]" placeholder="MM/DD/YYYY HH:MM.">';
             html +='<a class="remove_date" href="#"><span class="plus_box">-</span>Weiteres Datum und Uhrzeit entfernen</a></div>';
             $('.'+cl).append(html);
             $('#subdate_'+subdate).datetimepicker();
             subdate++;
          });


          /*$("body").on("click", ".submit_btn_main input[type='button']", function(){*/
            $('form#newCustomerForm').submit(function(event){
              event.preventDefault();

              $('.requirefield').remove();
              $('.requirefields').remove();
              var testnmat = "";
              $(".error_message").each(function(){
                        if($(this).val() == ""){

                          $(this).after("<div class='requirefield' style='color:red'>Bitte füllen Sie dieses Pflichtfeld aus!</div>");
                          testnmat = "yes";
                        }
                       
                    });

               $(".chkbok").each(function(){
                if(this.checked == false)
                          {
                              $(this).next().after("<div class='requirefields' style='color:red'>Bitte füllen Sie dieses Pflichtfeld aus!</div>");
                              testnmat = "yes";
                          }
                });

               /*$(".radobok").each(function(){
                var atLeastOneIsChecked = $('input:checkbox').is(':checked');
                if(atLeastOneIsChecked == false){
                  return false;
                }
               // alert(atLeastOneIsChecked);
                });*/
               
               if(testnmat == "yes"){
                  return false;
               }

              

              var phone = $('.telefonnummer').val(),
                  intRegex = /[0-9 -()+]+$/;
              if((phone.length < 6) || (!intRegex.test(phone)))
              {
                   //alert('Please enter a valid phone number.');
                   $('.telefonnummer').after("<div class='requirefield' style='color:red'>Please enter a valid phone number. </div>");
                   return false;
              }

              
              
                
              $.ajax({
                      type: "POST",
                      dataType: "json",
                      url : '<?php echo admin_url("admin-ajax.php"); ?>',
                      data: new FormData(this),
                      contentType: false,
                      cache: false,
                      processData:false,
                      success:function(data){
                        //alert(data);
                        alert(data.message);
                            //$("#feedback").html(data.message);
                       //console.log(data); 
                        }
                    });
            
            });

        });
 </script>

<script type="text/javascript"> 
        $(document).ready(function(){
           $('.ftr_nav a[href^="#"]').on('click',function (e) {
              e.preventDefault();
              var target = this.hash;
              $target = $(target);
              //$(".footer-terms-text").hide();
              $target.show();
              $('html, body').stop().animate({
               'scrollTop':$target.offset().top
              }, 2500, 'swing', function () {
               //window.location.hash = target;
              });
           });

           $('.main_menu a[href^="#"]').on('click',function (e) {
              e.preventDefault();
              var target = this.hash;
              $target = $(target);
              //$(".footer-terms-text").hide();
              $target.show();
              $('html, body').stop().animate({
               'scrollTop':$target.offset().top - 150
              }, 2500, 'swing', function () {
               //window.location.hash = target;
              });
           });
        });
</script>
 <!-- jQuery Form Validation code -->

<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('3727-798-10-9967');/*]]>*/</script>

<script type="text/javascript">
    // $(document).ready(function() { 
    //   $("#append_form").validate({ 
    //     rules: { 
 //        mytext: "required"  // simple rule, converted to {required: true} 
 //        }
    //   }); 
    // }); 
</script>
<script type="text/javascript">
    $(".close").on("click",function(){
    $("modal-content").removeClass("error");
    $("form label").removeClass("error");
    $("form")[0].reset();
    });
</script>

<script language="JavaScript" type="text/javascript">
function HandleBrowseClick()
{
    /*var fileinput = document.getElementById("browseme");
    fileinput.click();*/
    
    //alert(fileinput);
}
</script>


</body>
</html>
