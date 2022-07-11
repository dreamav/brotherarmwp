<template>
	<p>{{text}} {{desc}} <a href="" @click.prevent="copyText()"><img src="/wp-content/themes/appsa/images/copy_24px.svg"></a></p>
</template>

<script>
	export default {
        props:{
        	desc:String,
        	text:String
        },
        data(){
            return {
            	
            }
        },
        methods: {
        	copyText() {
		        const el = document.createElement('textarea');  
		        el.value = this.text;                                 
		        el.setAttribute('readonly', '');                
		        el.style.position = 'absolute';                     
		        el.style.left = '-9999px';                      
		        document.body.appendChild(el);                  
		        const selected =  document.getSelection().rangeCount > 0  ? document.getSelection().getRangeAt(0) : false;                                    
		        el.select();                                    
		        document.execCommand('copy');                   
		        document.body.removeChild(el);                  
		        if (selected) {                                 
		          document.getSelection().removeAllRanges();    
		          document.getSelection().addRange(selected);   
		        }
		    }
        },
        computed: {
        },
        created() {
        },
	}
</script>