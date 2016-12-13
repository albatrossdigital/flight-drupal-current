
Feeds OAuth Connector Fetcher
Fetches data from OAuth services for aggregation in Feeds.

Dependencies:
  oauth
  oauthconnector
  feeds
  http_client

Other Recommended Modules
  feeds_jsonpath_parser
  

-----------------------------
INSTALLATION
-----------------------------
Enable the module from Administer -> Modules as usual.
Create a new Feed
Select the OAuth Connector Fetcher



-----------------------------
EXAMPLE USE-CASE
Creating Pages with your Facebook Feed updates
-----------------------------

Modules
  oauth
    oauth_common
    oauth_common_providerui
  oauthconnector
  feeds
  http_client
  feeds_jsonpath_parser
  
Enable all modules
Go to /admin/structure/oauthconnector/list, click Add Provider from Preset, and choose Facebook
  Go to https://developers.facebook.com/apps and create a Facebook App
    Enter your site's URL in App Domain
    Check the Website row and enter your site's URL
  Copy App ID and App Secret keys into the OAuth Consumer Key and OAuth Consumer Secret fields
  Under OAUTH CONSUMER ADVANCED SETTINGS, add "read_stream" to the end of the Scope field.
    This will give us the proper Facebook permissions
Go to /user and click on the Connections tab
Click on the Facebook button and go through the connection process
Create a new Feeds Importer at /admin/structure/feeds/create
  Select the OAuth Connector fetcher
  Select the Feeds JSONpath parser
  Under Mapping, select JSONpath as the source and your target field
  Click on the Parser settings, and enter the JSONpath Context and path to each field
    For example: Context = $.data.*, Title = path
Go to /import and select your importer
  Enter https://graph.facebook.com/me/home as the Endpoint
  Select Facebook as the provider and import your nodes

I have found that Facebook's excellent Graph API Explorer (http://developers.facebook.com/tools/explorer)
is the best way to browse their api.


