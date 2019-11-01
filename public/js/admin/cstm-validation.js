
function abc()
{
  var tile_spec_type=$("input[name=tile_spec_type]:checked").val();
            if(tile_spec_type=="stair"){
                return true;
            }else{
                return false;
            } 
}


    jQuery.validator.addMethod("nowhitespace", function(value, element) {
    return this.optional(element) || /^\S+/i.test(value);
  }, "Space is not allowed at the beginning.");


jQuery("form[name='cms_save']").validate({

    ignore: [],
    rules: {

      page_name: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      },    
      body: {
        required: true,   
        nowhitespace:true
   
      },
      alt_image: {
        required: true, 
        nowhitespace:true,
        maxlength: 255     
      },
      image: {
        required: true, 
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"     
      },
      meta_title: {
        required: true, 
        nowhitespace:true,
   
      },
      meta_description: {
        required: true, 
        nowhitespace:true,
     
      },
      meta_keyword: {
        required: true,
        nowhitespace:true,

      },
    
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});





jQuery("form[name='cms_update']").validate({

    ignore: [],
    rules: {

      page_name: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      },    
      body: {
        required: true,
        nowhitespace:true      
      },
      image: 
      {        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      alt_image: {
        required: true,  
        nowhitespace:true,
        maxlength: 255    
      },
      meta_title: {
        required: true,
        nowhitespace:true,
     
      },
      meta_description: {
        required: true,
        nowhitespace:true,
      
      },
      meta_keyword: {
        required: true,
        nowhitespace:true,

      },
    
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='main_cms_update']").validate({

    ignore: [],

    rules: {

      page_name: 
      {
        required: true,
        nowhitespace:true,
        maxlength: 255
      },    
      body: {
        required: true
 
      },
      image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_image: {
        required: true, 
        nowhitespace:true,
        maxlength: 255     
      },
      meta_title: {
        required: true,
        nowhitespace:true,
     
      },
      meta_description: {
        required: true,
        nowhitespace:true,
      
      },
      meta_keyword: {
        required: true,
        nowhitespace:true,
      
      },
    
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


$('body').find(".status").click(function(){

 var data_id = $(this).attr("data_id");
 var url=  $(this).attr('data-url');
 var status=  $(this).attr('data-status');
 var test = confirm('Sure you want to change the status?');


 if(test == true)
 {
   jQuery.ajax({
           url: url,    
           type: "GET",
           data:  {'id': data_id , 'status': status},     
           success: function(data){
          location.reload();
          
           }               
       });
 }
});

/*Banner Image Banner Image Banner Image*/
  
jQuery("form[name='banner_image']").validate({

    ignore: [],
    rules: {

      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },    
      image_alt: {
        required: true,      
      },
      line_1: {
        required: true, 
      },
      line_2: {
        required: true, 
      },
      line_3: {
        required: true, 
      },
      button: {
        required: true, 
      },
      button_href: {
        required: true, 
      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});




jQuery("form[name='banner-edit']").validate({

    ignore: [],
    rules: {

      image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },    
      image_alt: {
        required: true,      
      },
      line_1: {
        required: true, 
      },
      line_2: {
        required: true, 
      },
      line_3: {
        required: true, 
      },
      button: {
        required: true, 
      },
      button_href: {
        required: true, 
      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/*Banner Image Banner Image Banner Image*/


/*Blog Category Validation Blog Category Validation*/
jQuery("form[name='category_add']").validate({

    ignore: [],
    rules: {

    
      category_title: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      },
       slug: {
        required: true,
                nowhitespace:true, 
        maxlength: 255 
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255

      },
         meta_title: {
        required: true, 
        nowhitespace:true, 

      },
      meta_description: {
        required: true,
        nowhitespace:true,


      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 

      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='category_edit']").validate({

    ignore: [],
    rules: {

    
      category_title: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      },
        slug: {
        required: true,
        nowhitespace:true, 
        maxlength: 255 
      },
      banner_image: 
      {

        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255

      },
         meta_title: {
        required: true, 
        nowhitespace:true, 

      },
      meta_description: {
        required: true, 

        nowhitespace:true
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 

      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


/*Blog Category Validation Blog Category Validation*/


/* Blog Section Validation Blog Section Validation */


jQuery("form[name='blog_save']").validate({

    ignore: [],

    rules: {

      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },    
      title: {
        required: true, 
        nowhitespace:true,    
        maxlength: 255     
      },
      description: {
        required: true, 
      },
      alt_image: {
        required: true,
        nowhitespace:true,    
        maxlength: 255 
      },
      category: {
        required: true, 
      },
      meta_title: {
        required: true,
        nowhitespace:true,    
        
      },
      meta_description: {
        required: true,
        nowhitespace:true,    
         
      },
      meta_keyword: {
        required: true,
        nowhitespace:true,    
         
      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='blog_update']").validate({

    ignore: [],

    rules: {

      image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },    
      title: {
        required: true, 
        nowhitespace:true,    
        maxlength: 255     
      },
      description: {
        required: true, 
      },
      alt_image: {
        required: true,
        nowhitespace:true,    
        maxlength: 255 
      },
      category: {
        required: true, 
      },
      meta_title: {
        required: true,
        nowhitespace:true,    

      },
      meta_description: {
        required: true,
        nowhitespace:true,    
 
      },
      meta_keyword: {
        required: true,
        nowhitespace:true,    
 
      },
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});




/* Blog Section Validation Blog Section Validation */


/*Solution Section Validation*/

jQuery("form[name='solution_add']").validate({

        debug: false,
     ignore: [],


    rules: {
   
      title: {
        required: true, 
        nowhitespace:true,    
        maxlength: 255
      }, 
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255

      }, 
      description: {
        required: true, 
      },  
      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
      product_features: {
         
        
      },
      size_price: {
         
        
      },
      application: {
        
         
      },
      meta_title: {
        required: true, 
        nowhitespace:true, 
        
      },
      meta_description: {
        required: true, 
        
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 
        
      },
 
            
       },
       messages: {
        
           nowhitespace :"Space is not allowed at the beginning.",

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});



jQuery("form[name='solution_edit']").validate({

    ignore: [],
    debug: false,
    rules: {
   
      title: {
        required: true, 
        nowhitespace:true,      
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      description: {
        required: true, 
      },    
       alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
      product_features: {
 
 
      },
      size_price: {
 

      },
      application: {

 
      },
      meta_title: {
        required: true, 
 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 
      },
  
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='s_category_add']").validate({

    ignore: [],
      debug: false,
    rules: {
   
      title: {
        required: true,  
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      }, 
      solution: {
        required: true,    
        
      },      
      description: {


      },   
      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      },  
      product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
      meta_title: {
        required: true, 
        nowhitespace:true, 

      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 

      },

      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='category-edit']").validate({

    ignore: [],
    
    rules: {
   
      title: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      alt_banner_image: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      }, 
      
      description: {

      },  
       product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
      image_alt: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      },   
      meta_title: {
        required: true,
        nowhitespace:true, 
 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true,
        nowhitespace:true, 
  
      },
    
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});



jQuery("form[name='sub_category_add']").validate({
    debug: false,
    ignore: [],
    
    rules: {
   
      title: {
        required: true,      
      },
        banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
      }, 
      category: {
        required: true,      
      },      
      description: {
        required: true, 
      },   
        image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
      },  
      meta_title: {
        required: true, 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
      },


      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='sub-category-edit']").validate({

    ignore: [],
    debug: false,
    rules: {
   
      title: {
        required: true,      
      },
     
      alt_banner_image: {
        required: true, 
      },
      category: {
        required: true,      
      },      
      description: {
        required: true, 
      },    
      meta_title: {
        required: true, 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
      },
        
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='csc-detail-save']").validate({

    ignore: [],
    
    rules: {
       
   
      title: {
        required: true,      
      },
       banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
      },
      sub_category: {
        required: true,      
      },      
      description: {
        required: true, 
      },   
       image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
      },  
      meta_title: {
        required: true, 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
      },
      tile_spec_type: {
        required: true
      },
        
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='detail-edit']").validate({

    ignore: [],
    
    rules: {
   
      title: {
        required: true,      
      },
      sub_category: {
        required: true,      
      },      
      description: {
        required: true, 
      },    
      meta_title: {
        required: true, 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
      },
     
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/* Header Logo Validation Header Logo Validation */

jQuery("form[name='logo']").validate({

    ignore: [],
    rules: {

      logo: 
      {
        required: true,
        extension : "png|PNG"
      },    
      

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/* Header Logo Validation Header Logo Validation */

/* How It Works Section Validation */
jQuery("form[name='how_it_works_edit']").validate({

    ignore: [],
    rules: {

      content: 
      {
        required: true,
        
      },    
      

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/* How It Works Section Validation */



/* Footer Section  Footer Section  Footer Section */


jQuery("form[name='social_update']").validate({

    ignore: [],
    rules: {

      facebook: 
      {
        required: true,
        
      },
      twitter: 
      {
        required: true,
        
      },
      linkedin: 
      {
        required: true,
        
      },
      youtube: 
      {
        required: true,
        
      },    
      

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/* Request A Quote Section Validation */

jQuery("form[name='request-edit']").validate({

    ignore: [],
    rules: {

      fname: {
        required: true,
      },
      lname: {
        required: true,
      },
      email: {
        required: true,
      },
      phone: {
        required: true,
      },    
      company: {
        required: true,
      }, 
      question1: {
        required: true,
      }, 
      question2: {
        required: true,
      }, 
      question3: {
        required: true,
      }, 
      question4: {
        required: true,
      }, 
      question5: {
        required: true,
      }, 
      question6: {
        required: true,
      }, 
      "surface_value[]": {
          surface_value:true
        },
      "wet_value[]": {
          wet_value:true
        },  
      "q2name[]": {
          q2name:true
        },  
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});



/*  Product Section  */

jQuery("form[name='csc-category-save']").validate({

        debug: false,
     ignore: [],


    rules: {
   
      title: {
        required: true, 
        nowhitespace:true,    
        maxlength: 255
      }, 
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255

      }, 
      description: {
        required: true, 
      },  
      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
     
      meta_title: {
        required: true, 
        nowhitespace:true, 

      },
      meta_description: {
        required: true, 

      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 

      },
  
            
       },
       messages: {
        
           nowhitespace :"Space is not allowed at the beginning.",

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});



jQuery("form[name='csc-category-update']").validate({

    ignore: [],
    debug: false,
    rules: {
   
      title: {
        required: true, 
        nowhitespace:true,
        maxlength: 255      
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      description: {
        required: true, 
      },    
       alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
       
      },
      
      meta_title: {
        required: true, 
 
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 
      },
  
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='csc-sub-category-save']").validate({

    ignore: [],
      debug: false,
    rules: {
   
      title: {
        required: true,  
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      }, 
      solution: {
        required: true,    
        
      },      
      description: {
        required: true, 

      },   
      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      },  
      product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
      meta_title: {
        required: true, 
        nowhitespace:true, 
        
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 
        
      },
      tile_spec_type: {
        required: true
      },
       
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='csc-sub-category-update']").validate({

    ignore: [],
    
    rules: {
   
      title: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      alt_banner_image: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      }, 
      
      description: {
        required: true, 
      },  
       product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
        banner_image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
       image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      },   
      meta_title: {
        required: true,
        nowhitespace:true, 
        
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true,
        nowhitespace:true, 
          
      },
  
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='csc-detail-save']").validate({

    ignore: [],
      debug: false,
    rules: {
   
      title: {
        required: true,  
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      banner_image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      }, 
      alt_banner_image: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      }, 
      solution: {
        required: true,    
        
      },      
      description: {
        required: true, 

      },   
      image: 
      {
        required: true,
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true, 
        nowhitespace:true, 
        maxlength: 255
      },  
      product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
      meta_title: {
        required: true, 
        nowhitespace:true, 

      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true, 
        nowhitespace:true, 
      
      },
  
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='csc-detail-update']").validate({

    ignore: [],
    
    rules: {
   
      title: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255    
      },
      price: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255
      },
      alt_banner_image: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      }, 
      
      description: {
        required: true, 
      },  
       product_features: {
        required: true, 
        
      },
      size_price: {
        required: true, 
        

      },
      application: {
        required: true, 
        
      },
        banner_image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
       image: 
      {
        
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"
      },
      image_alt: {
        required: true,
        nowhitespace:true, 
        maxlength: 255  
      },   
      meta_title: {
        required: true,
        nowhitespace:true, 
        
      },
      meta_description: {
        required: true, 
      },
      meta_keyword: {
        required: true,
        nowhitespace:true, 
          
      },
     
      
    

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


  /* Reference Validations   */

jQuery("form[name='reference_add']").validate({

    ignore: [],
    
    rules: {
   
      name: {
        required: true,   
        maxlength: 255,
        
      },
      "pdf[]": 
      {

        extension : "PDF|pdf"
      },  

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='reference_edit']").validate({

    ignore: [],
    
    rules: {
   
      name: {
        required: true,  
        nowhitespace:true,  
        maxlength: 255,
          
      },
      "pdf[]": 
      {
        
        extension : "PDF|pdf"
      },  

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='sub_reference_add']").validate({

    ignore: [],
    
    rules: {
   
      name: {
        required: true,  
        nowhitespace:true,  
        maxlength: 255,
            
      },
      reference_id: {
        required: true,
      },
      "pdf[]": 
      {
        required: true,
        extension : "PDF|pdf"
      },  

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

jQuery("form[name='sub_reference_edit']").validate({

    ignore: [],
    
    rules: {
   
      name: {
        required: true,   
        nowhitespace:true, 
        maxlength: 255,
        
      },
      reference_id: {
        required: true,
      },
      "pdf[]": 
      {
        
        extension : "PDF|pdf"
      },  

    },

    submitHandler: function(form) {
          form.submit();
    
    }
});





$('#reference_type').click(function(){
    if($(this).prop("checked") == true){
        $('.ref_pdf').attr('required','true');
    }
    else if($(this).prop("checked") == false){
        $('.ref_pdf').removeAttr('required','false');
    }
});
    
/*  Codes Validation  */


jQuery("form[name='code_add']").validate({

    ignore: [],

    rules: {
     
      title: {
        required: true,
        nowhitespace:true,    
        maxlength: 255 
      },      
      name_1: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       href_1: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       name_2: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       href_2: {       
        nowhitespace:true,    
        maxlength: 255 
      },
       name_3: {
        nowhitespace:true,    
        maxlength: 255 
      },
       href_3: {
        nowhitespace:true,    
        maxlength: 255 
      },
       rate_type: {
        nowhitespace:true,    
        maxlength: 255 
      },
       provincial_rate: {
        nowhitespace:true,    
        maxlength: 255,
        number:true 
      },
       canada_rate: {
        nowhitespace:true,    
        maxlength: 255,
        number:true 
      },
      
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


jQuery("form[name='code-edit']").validate({

    ignore: [],

    rules: {
     
      title: {
        required: true,
        nowhitespace:true,    
        maxlength: 255 
      },
       name_1: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       href_1: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       name_2: {        
        nowhitespace:true,    
        maxlength: 255 
      },
       href_2: {       
        nowhitespace:true,    
        maxlength: 255 
      },
       name_3: {
        nowhitespace:true,    
        maxlength: 255 
      },
       href_3: {
        nowhitespace:true,    
        maxlength: 255 
      },
       rate_type: {
        nowhitespace:true,    
        maxlength: 255 
      },
       provincial_rate: {
        nowhitespace:true,    
        maxlength: 255,
        number:true 
      },
       canada_rate: {
        nowhitespace:true,    
        maxlength: 255,
        number:true 
      },
      
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});


/*  Codes Validation  */


/* Advertisement Validation  */
jQuery("form[name='advert-edit']").validate({

    ignore: [],

    rules: {
     
      title: {
        required: true,
        nowhitespace:true,    
        maxlength: 255 
      },
       description: {  
       required: true,      
        nowhitespace:true,    
        maxlength: 255 
      },
      image: {  
        extension : "png|jpeg|jpg|PNG|JPEG|JPG"    
      },
      link: {
        required: true,      
        nowhitespace:true,    
        maxlength: 255
      }
      
      
    },

    submitHandler: function(form) {
          form.submit();
    
    }
});

/* Advertisement Validation  */