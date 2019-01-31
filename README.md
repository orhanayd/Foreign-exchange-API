# Foreign-exchange-API
**Unlimited** and ~~*access_token*~~ **not required** | ** continues to be develop**

**Main URL:**
- https://api.orhanaydogdu.com.tr/exchange/?base=USD

**Supported currency types:**
ISK, CAD, MXN, CHF, AUD, CNY, GBP, USD, SEK, NOK, TRY, IDR, ZAR, HRK, EUR, HKD, ILS, NZD, MYR, JPY, CZK, SGD, RUB, RON, HUF, BGN, INR, KRW, DKK, THB, PHP, PLN, BRL,

**Examples:**


|  Get the latest foreign exchange reference rates USD (you can change by base parameter) |
| ------------ |
|  https://api.orhanaydogdu.com.tr/exchange/?base=USD  


    {
      "status": true,
      "created": 1548921926,
      "desc": "Exchange rates API is a free service for current and historical foreign exchange rates, published by the European Central Bank. The API comes with no warranty but, we do our best effort to keep the service working reliably.",
      "result": {
        "base": "USD",
        "date": "2019-01-30",
        "rates": {
          "ISK": 119.8705048561,
          "CAD": 1.3221629189,
          "MXN": 19.0960713973,
          "CHF": 0.9977250853,
          "AUD": 1.3898853793,
          "CNY": 6.7168606177,
          "GBP": 0.7642050923,
          "USD": 1,
          "SEK": 9.0859217779,
          "NOK": 8.4817569341,
          "TRY": 5.2750021874,
          "IDR": 14130.0026249016,
          "ZAR": 13.6043398373,
          "HRK": 6.4953189255,
          "EUR": 0.8749671887,
          "HKD": 7.8451308076,
          "ILS": 3.6677749584,
          "NZD": 1.4632076297,
          "MYR": 4.1057835331,
          "JPY": 109.4408959664,
          "CZK": 22.5759034036,
          "SGD": 1.3510368361,
          "RUB": 65.9388397935,
          "RON": 4.1605564791,
          "HUF": 276.9533642488,
          "BGN": 1.7112608277,
          "INR": 71.1794557704,
          "KRW": 1118.1905678537,
          "DKK": 6.5314550704,
          "THB": 31.3798232566,
          "PHP": 52.3002887392,
          "PLN": 3.7540467232,
          "BRL": 3.7091609065
        }
      }
    }
|

| Request specific exchange rates by setting the symbols parameter. |
| ------------ |
| https://api.orhanaydogdu.com.tr/exchange/?base=USD&symbols=TRY,GBP,EUR 

    {
      "status": true,
      "created": 1548921666,
      "desc": "Exchange rates API is a free service for current and historical foreign exchange rates, published by the European Central Bank. The API comes with no warranty but, we do our best effort to keep the service working reliably.",
      "result": {
        "base": "USD",
        "date": "2019-01-30",
        "rates": {
          "GBP": 0.7642050923,
          "EUR": 0.8749671887,
          "TRY": 5.2750021874
        }
      }
    } |


------------

|  Currency converter with exchange parameter  |
| ------------ |
| https://api.orhanaydogdu.com.tr/exchange/?base=USD&symbols=GBP,EUR,TRY,AUD&exchange=10
you can convert all rates please delete symbols parameter

    {
      "status": true,
      "created": 1548922064,
      "desc": "Exchange rates API is a free service for current and historical foreign exchange rates, published by the European Central Bank. The API comes with no warranty but, we do our best effort to keep the service working reliably.",
      "result": {
        "base": "USD",
        "date": "2019-01-30",
        "rates": {
          "GBP": 7.642050923,
          "AUD": 13.898853792999999,
          "EUR": 8.749671887,
          "TRY": 52.750021874
        }
      }
    }
|

------------

#### **Error and suggestions for:**
##### info@orhanaydogdu.com.tr
