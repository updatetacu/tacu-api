## API参考
### 交易API

1. Get/currency/trade/market/buy市价交易买入

URL ```  https://api.ttex.com/currency/trade/market/buy```
示例
```
# Request
GET   https://api.ttex.com/currency/trade/market/buy
# Response
{
        "txNo":15300629835086
        "result":3000
}
```
返回值说明
```
result:是否成功
txNo:订单号
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|amount|  number   |   是     |	买入量	  |
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

2. Get/currency/trade/market/sell市价交易卖出

URL ```   https://api.ttex.com/currency/trade/market/sell```
示例
```
# Request
GET    https://api.ttex.com/currency/trade/market/sell
# Response
{
        "txNo":153006298350861212
        "result":3000
}
```
返回值说明
```
result:是否成功
txNo:订单号
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|num|  number   |   是     |	卖出量	  |
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

3. Get/currency/trade/buy限价交易买入

URL ```https://api.ttex.com/currency/trade/buy```
示例
```
# Request
GET     https://api.ttex.com/currency/trade/buy
# Response
{
        "txNo":1530063601833776402
        "result":3000
}
```
返回值说明
```
result:是否成功
txNo:订单号
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|num|  number   |   是     |	限价买入量	  |
| symbol|  String |  是  | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|
|price | number|是|限价买入价格

4. Get/currency/trade/sell限价交易卖出

URL ```    https://api.ttex.com/currency/trade/sell```
示例
```
# Request
GET     https://api.ttex.com/currency/trade/sell
# Response
{
        "txNo":1512263601833776402
        "result":3000
}
```
返回值说明
```
result:是否成功
txNo:订单号
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|num|  number   |   是     |	限价买入量	  |
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|
|price| number|是|价格

5. Get/currency/trade/findHistoryEntrust获取个人历史委托

URL ```  https://api.ttex.com/currency/trade/findHistoryEntrust ```
示例
```
# Request
GET https://api.ttex.com/currency/trade/findHistoryEntrust
# Response
{
	"data":[{
	"createTimeString":2018-06-21 15:23:44
	"entrustNumber":12407980.8629
	"entrustPrice":0.08059329
	"tradeMark":0
	"tradeStatus":5
	}],
	"result":success
}
```
返回值说明
```
data:请求返回成功取到的数组对象
createTimeString:时间
entrustNumber:数量
entrustPrice:价格
tradeMark:类型
tradeStatus:状态
result:成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

6. Get/currency/trade/findEntrust获取个人当前委托

URL ```https://api.ttex.com/currency/trade/findEntrust ```
示例
```
# Request
GET https://api.ttex.com/currency/trade/findEntrust
# Response
{
	"data":[{
	"createTimeString":2018-06-21 15:23:44
	"entrustNumber":12407980.8629
	"entrustPrice":0.08059329
	"tradeMark":0
	"tradeStatus":5
	}],
	"result":success
}
```
返回值说明
```
data:请求返回成功取到的数组对象
createTimeString:时间
entrustNumber:数量
entrustPrice:价格
tradeMark:类型
tradeStatus:状态
result:成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

7. Get/v1/market/tickers获取行情

URL ```https://api.ttex.com/v1/market/tickers```
示例
```
# Request
GET   https://api.ttex.com/v1/market/tickers
# Response
{
    "date":1530884195825
    "ticker":{
              "high":"6999.0000000000"
              "vol":"30.2457600980669260025024414062500"
              "last":"6680.0000000000"
              "low":"6432.0100000000"
              "buy":"6621.0000000000"
              "sell":"6899.9700000000"
              "changeRate":null
    }
}
```
返回值说明
```
ticker:获取行情返回成功的一个对象

```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是  | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

8. Get/v1/market/depth获取深度

URL ```https://api.ttex.com/v1/market/depth```
示例
```
# Request
GET   https://api.ttex.com/v1/market/depth
# Response
{
   "asks":[
         [6899.9700000000,0.0520]
         [6899.9800000000,0.0775]
         [6999.9900000000,0.0401]
         [7000.0000000000,0.1222]
         [7100.0000000000,0.2335]
   ]
   "bids":[
         [6680.0000000000,0.0200]
         [6621.0000000000,2.8899]
         [6580.0000000000,0.0697]
         [6575.0000000000,0.1500]
         [6535.5000000000,0.3075]
   ]
}
```
返回值说明
```
asks:数据请求成功得到的数组
bids:数据请求成功得到的数组
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是  | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|
| size|  Number |  是  | 深度|

9. Get/currency/trade/cancel撤单

URL ```https://api.ttex.com/currency/trade/cancel```
示例
```
# Request
GET   https://api.ttex.com/currency/trade/cancel
# Response
{
     "result":success
}
```
返回值说明
```
result:撤单是否成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| txNo|  String|  是  | 订单号|
| code|  Number| 是   | 交易对编号| 

10. Get/currency/trade/findOrder用户订单信息

URL ```https://api.ttex.com/currency/trade/findOrder```
示例
```
# Request
GET   https://api.ttex.com/currency/trade/findOrder
# Response
{
     "result":success
     "data":{
     "createTimeString":2018-07-06 22:33:17
     "entrustNumber":0.0046
     "entrustPrice":0.110185
     "tradeMark":0
     "tradeStatus":1
     "turnoverQuantity"1
     }
}
```
返回值说明
```
result:请求是否成功
createTimeString:委托时间
entrustNumber:委托数量
entrustPrice:委托价格
tradeMark:tradeMark=0,为买入状态;tradeMark=1,为卖出状态。
turnoverQuantity:成交数量
tradeStatus:状态
状态说明
         当 tradeStatus=0;// 正在委托下单
	 当 tradeStatus=1;// 委托成功
	 当 tradeStatus=2;// 部分成交
	 当 tradeStatus=3;// 已成交
	 当 tradeStatus=4; // 场内撤单
	 当 tradeStatus=5; // 场外撤单
	 当 tradeStatus=6;// 下单失败
		 
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| txNo|  String|  是  | 订单号|
| code|  Number| 是   | 交易对编号|

###资产API
1. Get/member/getAccount资产中心

URL ```https://api.ttex.com/member/getAccount```
示例
```
# Request
GET https://api.ttex.com/member/getAccount
# Response
[{  
     "blockedNum":0
     "holdingAmount":100000000.00000000000000
     "marketValue":85774.00000000
     "name":HSR
     "totalNum":100000000
}]
```
返回值说明
```
blockedNum:冻结资产
holdingAmount:总计
marketValue:估值
name:币种
totalNum:可用余额
```






