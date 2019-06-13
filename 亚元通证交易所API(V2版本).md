## API参考

### 交易API

1. Get/v2/currency/trade/buy买入订单

URL ```  https://api.tacu.com/v2/currency/trade/buy```
示例
```
# Request
GET   https://api.tacu.com/v2/currency/trade/buy
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
|num|  number   |   是     |	下单数量 例如:295.9668	  |
|price|  number   |   是     |		下单价格 例如:5.4528	  |
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

2. Get/v2/currency/trade/sell卖出订单

URL ```   https://api.tacu.com/v2/currency/trade/sell```
示例
```
# Request
GET    https://api.tacu.com/v2/currency/trade/sell
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
|num|  number   |   是     |	下单数量 例如:169.9750	  |
|price|  number   |   是     |		下单价格 例如2.110000	  |
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

3. Get/v2/currency/trade/cancel撤单

URL ```https://api.tacu.com/v2/currency/trade/cancel```
示例
```
# Request
GET     https://api.tacu.com/v2/currency/trade/cancel
# Response
{
        "data":1530063601833776402
        "result":success
}
```
返回值说明
```
result:是否成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|txNo|  number   |   是     |	订单编号 例如:154581730847678346143	  |


4. Get/v2/currency/trade/findOrder查询单个订单信息

URL ```    https://api.tacu.com/v2/currency/trade/findOrder```
示例
```
# Request
GET     https://api.tacu.com/v2/currency/trade/findOrder
# Response
{
    "data":{
           "createTimeString":2018-06-21 15:23:44
	   "entrustNumber":12407980.8629
	   "entrustPrice":0.08059329
	   "tradeMark":0
	   "tradeStatus":5
           "txNo":15066885441222
    },
    "result":success
}
```
返回值说明
```
data:请求返回成功取到的对象
result:是否成功
txNo:订单号
tradeStatus:订单状态{
      当 tradeStatus=0;// 正在委托下单
      当 tradeStatus=1;// 委托成功
      当 tradeStatus=2;// 部分成交
      当 tradeStatus=3;// 已成交
      当 tradeStatus=4; // 场内撤单
      当 tradeStatus=5; // 场外撤单
      当 tradeStatus=6;// 下单失败
}                   
tradeMark:交易标识{
      0代表买单，1代表卖单
}
entrustPrice:委托价格
entrustNumber:委托数量
createTimeString:创建时间
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
|txNo|  number   |   是     |	订单编号 例如:154581730847678346143	  |

5. Get/v2/currency/trade/findEntrust查询未完成订单

URL ```  https://api.tacu.com/v2/currency/trade/findEntrust ```
示例
```
# Request
GET https://api.tacu.com/v2/currency/trade/findEntrust
# Response
{
	"data":[{
	"createTimeString":2018-06-21 15:23:44
	"entrustNumber":12407980.8629
	"entrustPrice":0.08059329
	"tradeMark":0
	"tradeStatus":5
    "txNo":1587666654122884
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
tradeMark:类型{
      0代表买单，1代表卖单
}
tradeStatus:状态{
      当 tradeStatus=0;// 正在委托下单
      当 tradeStatus=1;// 委托成功
      当 tradeStatus=2;// 部分成交
      当 tradeStatus=3;// 已成交
      当 tradeStatus=4; // 场内撤单
      当 tradeStatus=5; // 场外撤单
      当 tradeStatus=6;// 下单失败
}    
txNo:订单号
result:是否成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|
| start|  number|    否 |分页参数(分页参数值分别为0，20，40。默认为0)

6. Get/v2/currency/trade/findHistoryEntrust查询历史订单

URL ```  https://api.tacu.com/v2/currency/trade/findHistoryEntrust```
示例
```
# Request
GET https://api.tacu.com/v2/currency/trade/findHistoryEntrust
# Response
{
	"data":[{
	"createTimeString":2018-06-21 15:23:44
	"entrustNumber":12407980.8629
	"entrustPrice":0.08059329
	"tradeMark":0
	"tradeStatus":5
    "txNo":1587666654122884
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
tradeMark:类型{
      0代表买单，1代表卖单
}
tradeStatus:状态{
      当 tradeStatus=0;// 正在委托下单
      当 tradeStatus=1;// 委托成功
      当 tradeStatus=2;// 部分成交
      当 tradeStatus=3;// 已成交
      当 tradeStatus=4; // 场内撤单
      当 tradeStatus=5; // 场外撤单
      当 tradeStatus=6;// 下单失败
}    
txNo:订单号
result:是否成功
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是   | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|
| start|  number|    否 |分页参数(分页参数值分别为0，20，40。默认为0)|

### 行情API

1. Get/v2/market/kline获取k线图数据

URL ```https://api.tacu.com/v2/market/kline ```
示例
```
# Request
GET https://api.tacu.com/v2/market/kline
# Response
{
     "close":5715.99
     "high":5716.07
     "low":5713.9
     "open":5716.07
     "time":1542342420000
     "volume":13.2834
}
```
返回值说明
```
close:收盘价
high:最高价
low:最低价
open:开盘价
time:成交时间
volume:成交量
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| end|  number |  是   |终止时间 例如:1545819011|
| period|  number |  是   |	时间段 例如:(1分钟时period为1,5分钟时period为5,15分钟时period为15,30分钟时period为30,1小时时period为60,1天时period为1D,1个月时period为1W)|
| start|  number |  是   |起始时间 例如:1545732551|
| symbol|  string	 |  是   |币种编号|

2. Get/v2/market/alltickers获取全部交易对的信息

URL ```https://api.tacu.com/v2/market/alltickers```
示例
```
# Request
GET   https://api.tacu.com/v2/market/alltickers
# Response
{
    "ae_btc":{
        "date": 1542388520000
        "ticker":{
            "buy":176.99
            "changeRate":1.56%
            "high":5776.11
            "last":5607.92
            "low":5583.66
            "sell":5613.16
            "vol":18761.633799225794
        }
    }
        "ae_usdt":{
        "date": 1541738459524
        "ticker":{
            "buy":176.99
            "changeRate":1.56%
            "high":5776.11
            "last":5607.92
            "low":5583.66
            "sell":5613.16
            "vol":18761.633799225794
        }
    }
        "eth_btc":{
        "date": 1542388520000
        "ticker":{
            "buy":176.99
            "changeRate":1.56%
            "high":5776.11
            "last":5607.92
            "low":5583.66
            "sell":5613.16
            "vol":18761.633799225794
        }
    }
            "zrx_usdt":{
        "date": 1542388520000
        "ticker":{
            "buy":176.99
            "changeRate":1.56%
            "high":5776.11
            "last":5607.92
            "low":5583.66
            "sell":5613.16
            "vol":18761.633799225794
        }
    }
}
```
返回值说明
```
ae_btc:数据请求成功返回的对象,币种简称
zrx_usdt:数据请求成功返回的对象,币种简称
eth_btc:数据请求成功返回的对象,币种简称
ae_usdt:数据请求成功返回的对象,币种简称
date:时间
buy:买一
changeRate:涨幅
high:最高价
last:当前价
low:最低价
sell:卖一价
vol:成交量

```

3. Get/v2/market/tickers获取单个币种的信息

URL ```https://api.tacu.com/v2/market/tickers```
示例
```
# Request
GET   https://api.tacu.com/v2/market/tickers
# Response
{
    "date":1541738697723,
    "ticker":{
        "buy":0.0137320000
        "changeRate":0.0
        "high":0.0131300000
        "last":0.0131300000
        "low":0.0131300000
        "sell":0.0131300000
        "vol":22439444.8876380920410156250000000000
    }
}
```
返回值说明
```
date:时间
ticker:数据请求成功得到的对象
buy:买一价
changeRate:涨幅
high:最高价
last:当前价
low:最低
sell:卖一价
vol:成交量
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是  | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

4. Get/v2/market/trade获取币种最新成交记录

URL ```https://api.tacu.com/v2/market/trade```
示例
```
# Request
GET   https://api.tacu.com/v2/market/trade
# Response
{
     "amount":20.888
     "direction":
     "price":500.63
     "ts":1541738697723
}
```
返回值说明
```
amount:成交数量
direction:成交方向
price:成交价格
ts:成交时间
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String |  是  | btc_usdt ltc_usdt eth_usdt etc_usdt bch_usdt|

### 账户API

1. Get/v2/member/getAccount用户订单信息

URL ```https://api.tacu.com/v2/member/getAccount```
示例
```
# Request
GET   https://api.tacu.com/v2/member/getAccount
# Response
{
     "blockedNum":0
     "holdingNum":1135378.73238188
     "name":TTF
     "totalNum":1135378.73238188
}
```
返回值说明
```
blockedNum:冻结数量
holdingNum:合计数量
name:币种名称
totalNum:可用数量
		 
```
请求参数

|参数名    |     参数类型 |   必填  |  描述 |
| :-------- | --------:| :------: |:------:|
| symbol|  String|  否  | 可不填入，缺少时候则查询所有的持仓信息|






