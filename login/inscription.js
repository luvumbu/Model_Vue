var inscriptions = new Vue({
  el: '#inscriptions',
  data: {
    display: 'display-none',
    password1:"Entrer votre mot de passe",
    password2:"Rétaper votre mot de passe",
    value_password1:"",
    value_password2:"",
    value_nom:"",
    value_prenom:"",
    value_email:"",
    display_submit:"display-none",
    value_submit:false
  },
  methods:{
      ckeck_value(event) {       
      switch (event.target.id) {
        case "password1":
                this.value_password1 =event.target.value;
                this.allfunction();
          break;
        case "password2":
                this.value_password2 =event.target.value;
                this.allfunction();
          break;
        case "nom":
                this.value_nom =event.target.value;
                this.allfunction();
            break;
        case "prenom":
                this.value_prenom =event.target.value;
                this.allfunction();
            break;  
        case "inscription_mail":
                this.value_email =event.target.value;
                this.allfunction();
            break;      
      }  
    },
    allfunction : function(){
      if(this.value_password1==this.value_password2 && this.value_password1!=""){        
        if(this.value_nom!="" && this.value_prenom!="" & this.value_email!=""){
            this.value_submit=true;          
        }
        else {
            this.value_submit=false;
        }
      }
      else {
        this.value_submit=false;
      }

    }
  },
 
})