# toutiao-marketing-sdk
今日头条MARKETING API SDK
## Requirements

- PHP 7.0+

## Example

```php
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingDelivery()->campaignGet()->setAdvertiserId(ADVERTISER_ID)->send();
var_dump($req->getBody());
```

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

## In projects

- demo放在test文件下,欢迎查看

## Authors && Contributors

- xiayifeng
- zhangwenzong

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)