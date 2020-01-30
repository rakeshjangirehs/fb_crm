
## Setup on Facebook Developer Account
    1. Create new App at https://developers.facebook.com/
    2. Dashboard -> Advanced Setting
    3. Add Business Manager & Add Account
    4. In [Business Manager](https://business.facebook.com/)
        1. Create System User
        2. Add Assets
        3. Generate Token (Which is long lived by default)

## Setup
    1. Install PHP Business SDK
        * composer require facebook/php-business-sdk
            * Reference : 
                1. [Marketing API SDK](https://developers.facebook.com/docs/marketing-api/sdks/)
                2. [Business SDK](https://developers.facebook.com/docs/business-sdk)
                3. [Business SDK Github ](https://github.com/facebook/facebook-php-business-sdk)
            * Other Package Confussion : facebook/php-ads-sdk (The new Business SDK is replacing the Marketing API SDK, So both will install php-business-sdk)
    2. Enable composer autoloading from vendor dir in config.php


## Important Links
    [Facebook API Code Samples](https://github.com/fbsamples)

## Documentation
    * [Video walkthrough about access tokens, system users](https://www.facebook.com/watch/?v=924152364365830)


## Facebook Access Tokens (Ref. - https://www.facebook.com/marketingdevelopers/videos/924152364365830/?v=924152364365830)
	* Types	(Ref. - https://developers.facebook.com/docs/facebook-login/access-tokens/)
		1 User Access Token
			* Token Lifetime
				1 Short-Term Token (1-2 hour)
				2 Long-Term Token (about 60 days)
			* By default User Access Tokens are short-term, although we can convert them to long-term tokens.
		2 App Access Token (Used on Server to Server Calls)
			To Generate App Access Token we need App ID and App Secret
		3 Page Access Token (Short-Term)
		4 Client Token (Used in Mobile Applications) Long-Term
	* Debug Access Token (https://developers.facebook.com/tools/accesstoken)
	
	
	
	322823158336835
	
SELECT `ehs_user`.`full_name` as `name`, `tiffin_request`.`date`  FROM `tiffin_request`
LEFT JOIN `ehs_user` ON `tiffin_request`.`uid` = `ehs_user`.`ref_uid`
WHERE `tiffin_request`.`date` = '2020-01-30' and `tiffin_request`.`status` <> 0