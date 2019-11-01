
jQuery("form[name='cart']").validate({

    
    rules: {

      'colour[]': 
      {
        required: true,

      }
   
    },

 

    submitHandler: function(form) {
          form.submit();
    
    }
});



jQuery("form[name='final_payment']").validate({


    rules: {

      'card_name': 
      {
        required: true,
        nowhitespace:true,

      },
      'card_number': 
      {
        required: true,
        nowhitespace:true,
      },
      'card_expiry': 
      {
        required: true,
        nowhitespace:true,
      },
      'card_cvv': 
      {
        required: true,
        nowhitespace:true,
      }
  

 
    },

 

    submitHandler: function(form) {
        $('.loader').show(); 
          form.submit();
    
    }
});





jQuery("form[name='shipping']").validate({

    errorPlacement: function(error, element) {
     error.appendTo('#shipping_error');
   },
    rules: {

      'shipping': 
      {
        required: true,

      }
   
    },

 

    submitHandler: function(form) {
          form.submit();
    
    }
});



jQuery("form[name='personal_details']").validate({

    
    rules: {

      'fname': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'lname': 
      {
        required: true,
        nowhitespace:true,
      },
      'email': 
      {
        required: true,
        nowhitespace:true,
        email:true,
        customemail: true,
      },  
      'password': 
      {
        required: true,
        nowhitespace:true,
      }, 
     
      'company': 
      {
        required: true,
        nowhitespace:true,
      }, 
      's_company': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'address': 
      {
        required: true,
        nowhitespace:true,
      },
      'address1': 
      {
        required: true,
        nowhitespace:true,
      }, 
      's_address': 
      {
        required: true,
        nowhitespace:true,
      },
      's_address1': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'city': 
      {
        required: true,
        nowhitespace:true,
      },
      's_city': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'province': 
      {
        required: true,
        nowhitespace:true,
      },
      's_province': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'zipcode': 
      {
        required: true,
        nowhitespace:true,
      },
      's_zipcode': 
      {
        required: true,
        nowhitespace:true,
      }, 
      'phone_number': 
      {
        required: true,
        nowhitespace:true,
        digits:true
      }, 
      's_phone_number': 
      {
        required: true,
        nowhitespace:true,
      }, 
    },

 

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='contact']").validate({

    
    rules: {

      name: 
      {
        required: true,
        lettersonly : true
      }, 
      email: 
      {
        required: true,
        nowhitespace:true,
        email:true,
        customemail: true,
      }, 
      subject: 
      {
        required: true,
        nowhitespace:true
      }, 
      message: 
      {
        required: true,
        nowhitespace:true
      },    
      
    
    },

 messages: {
      name: { 
        required :"Please enter your name.",
        lettersonly : "Only alphabets are allowed."
     },
     email: {
     	required :"Please enter your email.",
     	customemail : "Please enter a valid email address.",
     	nowhitespace : "Space is not allowed at the beginning."
     },
     subject: {
     	required :"Please enter your subject.",
     	nowhitespace : "Space is not allowed at the beginning."
     },
     message: {
     	required :"Please enter your message.",
     	nowhitespace : "Space is not allowed at the beginning."
     }
     }, 

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='newsletter']").validate({

    
    rules: {

      email: 
      {
        required: true,
        nowhitespace:true,
        email:true,
        customemail: true,
      }, 
   
    },

 	messages: {
      email: { 
       	required :"Please enter your email.",
     	customemail : "Please enter a valid email address.",
     	nowhitespace : "Space is not allowed at the beginning."
     },    
    }, 

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='quote']").validate({

    errorElement: 'label',
    rules: {

      email: 
      {
        required: true,
        nowhitespace:true,
        email:true,
        customemail: true,
        maxlength: 255
      }, 
      name: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      },
      lname: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      }, 
      phone: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      }, 
      company_name: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      }, 
      product: 
      {
        required: true,
      }, 
      area: {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Tactile"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      },
      put: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Tactile"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      },  
      material: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Tactile"){
                return true;
            }else{
                return false;
            }
        }
      }, 
      wet_type: 
      {
        required:function(){
            var material=$("input[name=material]:checked").val();
            if(material=="Wet Concrete"){
                return true;
            }else{
                return false;
            }
        }
      },  
      surface_type: 
      {
        required:function(){
            var material=$("input[name=material]:checked").val();
            if(material=="Glue it on top of existent surface"){
                return true;
            }else{
                return false;
            }
        }
      },  
      dome_type: 
      {
        required:function(){
            var material=$("input[name=material]:checked").val();
            if(material=="Drill Single Domes or Bars"){
                return true;
            }else{
                return false;
            }
        }
      },   
      att_domes: 
      {
        required:function(){
            var material=$("input[name=material]:checked").val();
            if(material!=""){
                return true;
            }else{
                return false;
            }
        }
      },  
      stair_put: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Stair Nosing"){
                return true;
            }else{
                return false;
            }
        }
      },   
      photoluminescent: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Stair Nosing"){
                return true;
            }else{
                return false;
            }
        }
      },  
      stair_width: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Stair Nosing"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      },   
      exit_put: 
      {
        required:function(){
            var product=$("input[name=product]:checked").val();
            if(product=="Exit Signs"){
                return true;
            }else{
                return false;
            }
        }
      },   
      mountain_kit: 
      {
        required:function(){
            var exit_put=$("input[name=exit_put]:checked").val();
            if(exit_put=="At Exit Door"){
                return true;
            }else{
                return false;
            }
        }
      }, 
      exit_direction: 
      {
        required:function(){
            var exit_put=$("input[name=exit_put]:checked").val();
            if(exit_put=="At Exit Door"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      },  
      exit_need: 
      {
        required:function(){
            var exit_put=$("input[name=exit_put]:checked").val();
            if(exit_put=="At Exit Door"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      },   
      path_direction: 
      {
        required:function(){
            var exit_put=$("input[name=exit_put]:checked").val();
            if(exit_put=="Pathmarking to Exit Door"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      }, 
      path_need: 
      {
        required:function(){
            var exit_put=$("input[name=exit_put]:checked").val();
            if(exit_put=="Pathmarking to Exit Door"){
                return true;
            }else{
                return false;
            }
        },
        nowhitespace:true,
        maxlength: 255
      }, 
      shipped: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      },
      additional: 
      {
       
        nowhitespace:true,
        maxlength: 255
      },   



    },

  messages: {
      email: { 
        required :"Please enter your email.",
      customemail : "Please enter a valid email address.",
      nowhitespace : "Space is not allowed at the beginning."
     },    
    }, 
    errorPlacement: function(error, element) {
            $(element).parent().append(error);
        },

    submitHandler: function(form) {
          form.submit();
    
    }
});


 jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+[a-zA-Z\s]*$/);
  }, 'Only characters are allowed.');

  jQuery.validator.addMethod("nowhitespace", function(value, element) {
    return this.optional(element) || /^\S+/i.test(value);
  }, "Space is not allowed at the beginning.");

   jQuery.validator.addMethod("customemail", function(value, element) {
    return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
  }, "Please enter a valid email address.");  



