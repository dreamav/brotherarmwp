<template>
	<div>
		<div id="card">
			<h3>Банківські перекази</h3>
			 <tabs
			 	:options="{ useUrlFragment: false }"
			 >
		        <tab name="EUR">
		            <p>Реквізити підприємства/Company details</p>
					<copytext :text="'BROTHER ARM (B. A.)'" :desc="'Company Name:'"></copytext> 
					<copytext :text="'UA223052990000026002003603096'" :desc="'IBAN:'"></copytext> 
					<copytext :text="'JSC CB PRIVATBANK'" :desc="'Bank:'"></copytext> 
					<copytext :text="'PBANUA2X'" :desc="'SWIFT:'"></copytext> 
					<copytext :text="'UA 88017 Uzhorod, Zahorska street 26'" :desc="'Company address:'"></copytext> 
		        </tab>
		        <tab name="UAH">
		            <p>Найменування отримувача: </p>
					<copytext :text="'ГО ПЛЕЧЕ ПОБРАТИМА'"></copytext> 
					<p>Код отримувача (ЄДРПОУ):  </p>
					<copytext :text="'41419900'"></copytext> 
					<p>Рахунок отримувача у форматі відповідно до стандарту IBAN:</p>
					<copytext :text="'UA083052990000026002043606536'"></copytext> 
					<p>Назва банку:</p>
					<copytext :text="'АТ КБ ПРИВАТБАНК'"></copytext> 
		        </tab>
		    </tabs>			
		</div>
		<div id="crypto">
			<h3>Crypto</h3>
			<tabs
			 	:options="{ useUrlFragment: false }"
			 >
		        <tab name="Bitcoin (BTC)">
		            <copytext :text="'bc1qn73gpjg4wx0tsrmrgk05p9pesu39tjuvruupdg'"></copytext> 
		        </tab>
		        <tab name="Ethereum (ETH)">
		           <copytext :text="'0x5E3BF03F88BCf94931b4c67c1437875cc6A5062F'"></copytext> 
		        </tab>
		        <tab name="Litecoin (LTC)">
		           <copytext :text="'LgBv2NYNtvLJp6SB6ibHng7yqQykWvdeZW'"></copytext> 
		        </tab>
		        <tab name="Monero (XMR)">
		           <copytext :text="'48Gai8PpCCNYVvrUyPuyfLf9WNpbtV23VGQdZ2dfPQ4ZaRd1Tdhv5tpBrxGs14Z6hPeAUduB7RnLL1kWBkTKpWjjKvDBcLT'"></copytext>
		        </tab>
		        <tab name="Dogecoin (DOGE)">
		           <copytext :text="'DTnLgkXXJGzGjpykE6LHxmcxmPTK7aE5zr'"></copytext>
		        </tab>
		        <tab name="Tether USD (USDT)">
		           <copytext :text="'0x5E3BF03F88BCf94931b4c67c1437875cc6A5062F'" :desc="'(ETH)'"></copytext>
		           <copytext :text="'TKFMSNdRXRt5eqgRGwdQqextHNthSUBJB3'" :desc="'(TRX)'"></copytext>
		        </tab>
		        <tab name="BNB (BNB)">
		           <copytext :text="'0x5E3BF03F88BCf94931b4c67c1437875cc6A5062F'"></copytext>
		        </tab>
		    </tabs>			
		</div>
	</div>
</template>

<script>
	import Copytext from "./copytext.vue"
	import {Tabs, Tab} from 'vue-tabs-component';
	export default {
        props:{
        	
        },
        data(){
            return {
            	
            }
        },
        methods: {
        },
        computed: {
        },
        created() {
        },
        components:{
			Copytext,Tabs, Tab
        }
	}
</script>