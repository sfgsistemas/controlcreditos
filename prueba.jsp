<script type="text/javascript">



public static void main(String[] args) throws IOException {
HttpClient client;
client = HttpClientBuilder.create().build(); 
HttpGet urlAcces = new HttpGet("https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939"); 
HttpGet urlData = new HttpGet("https://qeq.mx/datos/qws/pepsp?nombre=Miguel&paterno=Osorio&materno=chong");
HttpResponse resAcces = client.execute(urlAcces);
System.out.println(resAcces);
HttpResponse resData = client.execute(urlData);
System.out.println(resData);
BufferedReader rd = new BufferedReader(new InputStreamReader(resData.getEntity().getContent()));
String line = " ";
while((line = rd.readLine()) != null){ System.out.println(line);
} }

            
                                
</script>