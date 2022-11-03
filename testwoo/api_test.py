from woocommerce import API

wcapi = API(
    url="http://mystore.local",
    consumer_key="ck_539d91c73a0beea2d22218c9a2253cd16b23d630",
    consumer_secret="cs_63effe6a3a8d96aa6a33c3f4b10a82fe6678911c",
    version="wc/v3"
)

r = wcapi.get("products")

print(r.json())

