<?php
return [ 'product' => [ 'name' => 'Sts', 'domain' => 'sts-openapi-daily.alibaba.net,sts.aliyuncs.com,sts-inner.aliyuncs.com,sts.[Region].aliyuncs.com,sts-inner.[Region].aliyuncs.com,sts-share.[Region].aliyuncs.com,sts-vpc.[Region].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Sts', 'name' => '2015-04-01', 'apiStyle' => 'RPC', ], 'api' => [ 'GenerateSessionAccessKey' => [ 'attributes' => [ 'version' => '2015-04-01', 'showJsonItemName' => 'true', 'name' => 'GenerateSessionAccessKey', 'parameterType' => 'Single', 'authType' => 'PrivateKey', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sts', ], 'parameters' => [ 'Parameter' => [ 'DurationSeconds' => [ 'name' => 'DurationSeconds', 'tagName' => 'DurationSeconds', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'sts_backend_sign_key', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://sts-internal.${regionId}.aliyun-inc.com/api/GenerateSessionAccessKey', 'timeout' => '500', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'GenerateSessionAccessKey', ], 'GetCallerIdentity' => [ 'attributes' => [ 'version' => '2015-04-01', 'showJsonItemName' => 'true', 'name' => 'GetCallerIdentity', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sts', ], 'parameters' => null, 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'sts_backend_sign_key', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://sts-internal.${regionId}.aliyun-inc.com/api/GetCallerIdentity', 'timeout' => '2000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '600', 'controlUnit' => 'Minute', ], 'name' => 'GetCallerIdentity', ], 'AssumeRoleWithServiceIdentity' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2015-04-01', 'showJsonItemName' => 'true', 'name' => 'AssumeRoleWithServiceIdentity', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sts', ], 'parameters' => [ 'Parameter' => [ 'DurationSeconds' => [ 'name' => 'DurationSeconds', 'tagName' => 'DurationSeconds', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Policy' => [ 'name' => 'Policy', 'tagName' => 'Policy', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RoleArn' => [ 'name' => 'RoleArn', 'tagName' => 'RoleArn', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RoleSessionName' => [ 'name' => 'RoleSessionName', 'tagName' => 'RoleSessionName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'AssumeRoleFor' => [ 'name' => 'AssumeRoleFor', 'tagName' => 'AssumeRoleFor', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'sts_backend_sign_key', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://sts-internal.${regionId}.aliyun-inc.com/api/AssumeRoleWithServiceIdentity', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'AssumeRoleWithServiceIdentity', ], 'AssumeRole' => [ 'attributes' => [ 'version' => '2015-04-01', 'showJsonItemName' => 'true', 'name' => 'AssumeRole', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sts', ], 'parameters' => [ 'Parameter' => [ 'DurationSeconds' => [ 'name' => 'DurationSeconds', 'tagName' => 'DurationSeconds', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Policy' => [ 'name' => 'Policy', 'tagName' => 'Policy', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RoleArn' => [ 'name' => 'RoleArn', 'tagName' => 'RoleArn', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RoleSessionName' => [ 'name' => 'RoleSessionName', 'tagName' => 'RoleSessionName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'sts_backend_sign_key', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://sts-internal.${regionId}.aliyun-inc.com/api/AssumeRole', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '6000', 'controlUnit' => 'Minute', 'special' => 'StsSpecialUserForControlBug', ], 'name' => 'AssumeRole', ], 'GetFederationToken' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2015-04-01', 'showJsonItemName' => 'true', 'name' => 'GetFederationToken', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Sts', 'controlPolicy' => 'Sts_GetFederationToken_20150817', ], 'parameters' => [ 'Parameter' => [ 'Name' => [ 'name' => 'Grantee', 'tagName' => 'Name', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Policy' => [ 'name' => 'Policy', 'tagName' => 'Policy', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DurationSeconds' => [ 'name' => 'DurationSeconds', 'tagName' => 'DurationSeconds', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'sts_backend_sign_key', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://sts-internal.${regionId}.aliyun-inc.com/api/GetFederationToken', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '6000', 'controlUnit' => 'Minute', 'special' => 'StsSpecialUserForControlBug', ], 'name' => 'GetFederationToken', ], ],];