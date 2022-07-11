<template>
	<div>
		<div id="card">
			<h3>Банківські перекази</h3>
			 <tabs
			 	:options="{ useUrlFragment: false }"
			 >
		        <tab name="EUR">
		            <p>Реквізити підприємства/Company details</p>
					<copytext :text="'ПЛЕЧЕ ПОБРАТИМА ГО'" :desc="'(Назва підприємства/company Name)'"></copytext> 
					<copytext :text="'UA223052990000026002003603096'" :desc="'(IBAN Code)'"></copytext> 
					<copytext :text="'JSC CB PRIVATBANK, 1D HRUSHEVSKOHO STR., KYIV, 01001, UKRAINE'" :desc="'(Назва банку/Name of the bank)'"></copytext> 
					<copytext :text="'PBANUA2X'" :desc="'(SWIFT code банку/Bank SWIFT Code)'"></copytext> 
					<copytext :text="'UA 88017 Закарпатська м Ужгород вул Загорська б.26'" :desc="'(Адреса підприємства/Company address)'"></copytext> 
					<p>Банки кореспонденти/Correspondent banks</p>
					<copytext :text="'400886700401'" :desc="'(Рахунок у банку-кореспонденті/Account in the correspondent bank)'"></copytext> 
					<copytext :text="'COBADEFF'" :desc="'(SWIFT Code банку-кореспондента/SWIFT Code of the correspondent bank)'"></copytext> 
					<copytext :text="'Commerzbank AG, Frankfurt am Main, Germany'" :desc="'(Банк-кореспондент/Correspondent bank)'"></copytext> 
					<p>або</p>
					<copytext :text="'6231605145'" :desc="'(Рахунок у банку-кореспонденті/Account in the correspondent bank)'"></copytext> 
					<copytext :text="'CHASDEFX'" :desc="'(SWIFT Code банку-кореспондента/SWIFT Code of the correspondent bank)'"></copytext> 
					<copytext :text="'J.P.MORGAN AG, FRANKFURT AM MAIN, GERMANY'" :desc="'(Банк-кореспондент/Correspondent bank)'"></copytext> 
		        </tab>
		        <tab name="UAH">
		            <p>Найменування отримувача: </p>
					<copytext :text="'ГО ПЛЕЧЕ ПОБРАТИМА'"></copytext> 
					<p>Код отримувача:  </p>
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