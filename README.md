# toutiao-marketing-sdk
- 今日头条MARKETING API SDK
## Requirements

- PHP 7.0+

## Directory Structure
```
AdvertisingDelivery/           广告组模块
AdvertisingOriginality/        广告创意模块
AdvertisingPlan/               广告计划模块
AuthenticationOauth/           头条OAuth2.0授权
core/                          sdk核心
Dmp/                           DMP人群管理模块
Report/                        报表模块
Tool/                          工具模块
```

## Example

```php
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingDelivery()->campaignGet()->setAdvertiserId(ADVERTISER_ID)->send();
var_dump($req->getBody());
```

## Method introduction

广告组模块       |执行方式
  ------------- | -------------
 获取广告组       |$client::AdvertisingDelivery()->campaignGet()->set->send| 
 创建广告组       |$client::AdvertisingDelivery()->campaignCreate()->set->send | 
 修改广告组       | $client::AdvertisingDelivery()->campaignUpdate()->set->send | 
 广告组更新状态   | $client::AdvertisingDelivery()->campaignUpdateStatus()->set->send | 

广告创意|执行方式 
 ------------- | -------------
 获取创意列表| $client::AdvertisingOriginality()->CreativeGet()->set->send| 
 创建广告创意|$client::AdvertisingOriginality()->CreativeCreate()->set->send | 
 创意素材信息| $client::AdvertisingOriginality()->CreativeMaterialRead()->set->send | 
 创意详细信息| $client::AdvertisingOriginality()->CreativeRead()->set->send | 
 修改创意信息| $client::AdvertisingOriginality()->CreativeUpdate()->set->send | 
 更新创意状态| $client::AdvertisingOriginality()->CreativeUpdateStatus()->set->send | 




## In projects

- demo放在test文件下,欢迎查看

## Authors && Contributors

- xiayifeng
- zhangwenzong

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)