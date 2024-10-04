使用 composer 安裝 library
```
composer require google/apiclient:^2.15.0
composer require facebook/graph-sdk
```
修復fb登入出現錯誤
```
/vendor/facebook/graph-sdk/src/Facebook/Http/GraphRawResponse.php
```
107行改為
```
preg_match('/HTTP\/\d(?:\.\d)?\s+(\d+)\s+/',$rawResponseHeader, $match);
```

env.php設定
1.  google: google api json位置
2.  fb: app_id app_secret
