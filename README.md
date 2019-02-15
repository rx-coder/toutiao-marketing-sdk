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
// 获取token, refresh_token
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

// 刷新token
print_r($auth->refreshToken(REFRESH_TOKEN));
```

```php
// 调用示例
$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::AdvertisingDelivery()->campaignGet()->setAdvertiserId(ADVERTISER_ID)->send();
var_dump($req->getBody());
```

## Method introduction

广告组模块       |执行方式
  ------------- | -------------
 获取广告组       |$client::AdvertisingDelivery()->campaignGet()| 
 创建广告组       |$client::AdvertisingDelivery()->campaignCreate()| 
 修改广告组       | $client::AdvertisingDelivery()->campaignUpdate()| 
 广告组更新状态   | $client::AdvertisingDelivery()->campaignUpdateStatus()| 

广告创意|执行方式 
 ------------- | -------------
 获取创意列表| $client::AdvertisingOriginality()->CreativeGet()| 
 创建广告创意|$client::AdvertisingOriginality()->CreativeCreate() | 
 创意素材信息| $client::AdvertisingOriginality()->CreativeMaterialRead() | 
 创意详细信息| $client::AdvertisingOriginality()->CreativeRead() | 
 修改创意信息| $client::AdvertisingOriginality()->CreativeUpdate() | 
 更新创意状态| $client::AdvertisingOriginality()->CreativeUpdateStatus()| 
 
 广告计划|执行方式 
  ------------- | -------------
  创建广告计划| $client::AdvertisingPlan()->AdCreate()| 
  获取广告计划|$client::AdvertisingPlan()->AdGet() | 
  修改广告计划| $client::AdvertisingPlan()->AdUpdate()| 
  更新计划出价|  $client::AdvertisingPlan()->AdUpdateBid() | 
  更新计划预算| $client::AdvertisingPlan()->AdUpdateBudget() | 
  更新计划状态| $client::AdvertisingPlan()->AdUpdateStatus()| 

## In projects

- demo放在test文件下,欢迎查看

## Authors && Contributors

- xiayifeng
- zhangwenzong

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)