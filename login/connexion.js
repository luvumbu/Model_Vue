var connexion = new Vue({
  el: '#connexion',
  data: {
    display: 'display-none',
    value_submit:false,
    value_email:"",
    value_password:""
  }, 
  methods:{
    ckeck_value : function() {
      switch (event.target.id) {
        case "email":
          this.value_email =event.target.value;   
          this.allfunction();        
        break;
        case "password":
                this.value_password =event.target.value;
               console.log(this.value_password);   
               this.allfunction();               
          break;
      }
      
    },
    allfunction: function(){
      if(this.value_email!="" && this.value_password!=""){
        this.value_submit = true;
      }
      else {
        this.value_submit = false;
      }
    }
    
  }
})
