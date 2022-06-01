<?php
namespace com\zoho\crm\api\util;

/**
 * This class uses the SDK constants name reference.
 */
class Constants
{
    const FILE_ERROR = "file_error";

    const FILE_DOES_NOT_EXISTS = "file does not exists";

    const FIELD_DETAILS_DIRECTORY = "resources";

    const PACKAGE_NAMESPACE = "com\\zoho\\crm\\api";

    const CLIENT_ID = "client_id";

    const CLIENT_SECRET = "client_secret";

    const REDIRECT_URL = "redirect_url";

    const REDIRECT_URI = "redirect_uri";

    const GRANT_TYPE = "grant_type";

    const REFRESH_TOKEN = "refresh_token";

    const EXPIRES_IN = "expires_in";

    const EXPIRES_IN_SEC = "expires_in_sec";

    const ACCESS_TOKEN = "access_token";

    const REQUEST_METHOD_POST = "POST";

    const REQUEST_METHOD_GET = "GET";

    const REQUEST_METHOD_PUT = "PUT";

    const REQUEST_METHOD_PATCH = "PATCH";

    const PROXY_SETTINGS = "Proxy settings - ";

    const REQUEST_PROXY_ERROR = "REQUESTPROXY ERROR";

    const HOST_ERROR_MESSAGE = "Host MUST NOT be null.";

    const PORT_ERROR_MESSAGE = "Port MUST NOT be null.";

    const USER_MAIL_NULL_ERROR = "USER MAIL NULL ERROR";

    const USER_MAIL_NULL_ERROR_MESSAGE = "User Mail MUST NOT be null. Use setUserMail() to set value.";

    const PROXY_HOST = "Host: ";

    const PROXY_PORT = "Port: ";

    const PROXY_USER = "User: ";

    const PROXY_DOMAIN = "Domain: ";

    const REQUEST_METHOD_DELETE = "DELETE";

    const REQUEST_CATEGORY_READ = "READ";

	const REQUEST_CATEGORY_CREATE = "CREATE";

    const REQUEST_CATEGORY_UPDATE = "UPDATE";

    const REQUEST_CATEGORY_ACTION = "ACTION";

    const CODE = "code";

    const GRANT_TYPE_AUTH_CODE = "authorization_code";

    const AUTHORIZATION = "Authorization";

    const AUTHENTICATION_FAILURE = "AUTHENTICATION_FAILURE";

    const DATATYPE_VALIDATE = "DATATYPE_VALIDATE";

    const ERROR = "error";

    const OAUTH_HEADER_PREFIX = "Zoho-oauthtoken ";

    const API_NAME = "api_name";

    const INVALID_ID_MSG = "The given id seems to be invalid.";

    const API_MAX_RECORDS_MSG = "Cannot process more than 100 records at a time.";

    const API_MAX_ORGTAX_MSG = "Cannot process more than 100 org taxes at a time.";

    const API_MAX_NOTES_MSG = "Cannot process more than 100 notes at a time.";

    const API_MAX_TAGS_MSG = "Cannot process more than 50 tags at a time.";

    const API_MAX_RECORD_TAGS_MSG = "Cannot process more than 10 tags at a time.";

    const INVALID_DATA = "INVALID_DATA";

    const CODE_SUCCESS = "SUCCESS";

    const STATUS_SUCCESS = "success";

    const STATUS_ERROR = "error";

    const SDK_ERROR = "ZCRM_INTERNAL_ERROR";

    const LEADS = "Leads";

    const ACCOUNTS = "accounts";

    const CONTACTS = "Contacts";

    const DEALS = "Deals";

    const QUOTES = "Quotes";

    const SALESORDERS = "SalesOrders";

    const INVOICES = "Invoices";

    const PURCHASEORDERS = "PurchaseOrders";

    const PRICING_DETAILS_NAMESPACE = "com\\zoho\\crm\\api\\record\\PricingDetails";

    const PARTICIPANTS = "com\\zoho\\crm\\api\\record\\Participants";

    const MODULE_NAMESPACE = "com\\zoho\\crm\\api\\modules\\Module";

    const PER_PAGE = "per_page";

    const PAGE = "page";

    const COUNT = "count";

    const MORE_RECORDS = "more_records";

    const ALLOWED_COUNT = "allowed_count";

    const MESSAGE = "message";

    const STATUS = "status";

    const DATA = "data";

    const DETAILS = "details";

    const MODULE = "module";

    const MODULES = "modules";

    const CHOICE_NAMESPACE = "com\\zoho\\crm\\api\\util\\Choice";

    const CUSTOM_VIEWS = "custom_views";

    const TAGS = "tags";

    const TAXES = "taxes";

    const INFO = "info";

    const ORG = "org";

    const READ = "read";

    const RESULT = "result";

    const UPLOAD = "upload";

    const WRITE = "write";

    const CALLBACK = "callback";

    const FILETYPE = "file_type";

    const QUERY = "query";

    const USERS = "users";

    const HTTP_CODE = "http_code";

    const VARIABLES = "variables";

    const PRIMITIVE_TYPES = array(
        "string",
        "integer",
        "boolean",
        "float",
        "double"
    );

    const MANDATORY_VALUE_MISSING_ERROR = "MANDATORY VALUE MISSING ERROR";

    const MAXIMUM_LENGTH_ERROR = "MAXIMUM LENGTH ERROR";

    const TYPE_ERROR = "TYPE ERROR";

    const METHOD_NOT_FOUND = "METHOD NOT FOUND";

    const EXCEPTION_IS_KEY_MODIFIED = "Exception in calling isKeyModified : ";

    const ZOHO_SDK = "X-ZOHO-SDK";

    const HEADERS = "headers";

    const MYSQL_HOST = "localhost";

    const MYSQL_DATABASE_NAME = "zohooauth";

    const MYSQL_USER_NAME = "root";

    const MYSQL_PORT_NUMBER = "3306";

    const GET_TOKEN_DB_ERROR = "Exception in getToken - DBStore : ";

    const GET_TOKENS_DB_ERROR = "Exception in getTokens - DBStore : ";

    const TOKEN_STORE = "TOKEN_STORE";

    const DELETE_TOKENS_FILE_ERROR = "Exception in deleteTokens - FileStore : ";

    const SAVE_TOKEN_DB_ERROR = "Exception in saveToken - DBStore : ";

    const DELETE_TOKEN_DB_ERROR = "Exception in deleteToken - DBStore : ";

    const DELETE_TOKENS_DB_ERROR = "Exception in deleteTokens - DBStore : ";

    const DB_ERROR = "Failed to connect to MySQL : ";

    const USER_MAIL = "user_mail";

    const GRANT_TOKEN = "grant_token";

    const EXPIRY_TIME = "expiry_time";

    const GET_TOKEN_FILE_ERROR = "Exception in getToken - FileStore : ";

    const GET_TOKENS_FILE_ERROR = "Exception in getTokens - FileStore : ";

    const SAVE_TOKEN_FILE_ERROR = "Exception in saveToken - FileStore : ";

    const DELETE_TOKEN_FILE_ERROR = "Exception in deleteToken - FileStore : ";

    const SAVE_TOKEN_ERROR = "Exception in saving tokens : ";

    const GET_TOKEN_ERROR = "Exception in getting access token : ";

    const INVALID_CLIENT_ERROR = "INVALID CLIENT ERROR";

    const RESPONSE = "response";

    const CONTENT_TYPE = 'content-type';

    const NAME = "name";

    const VALUES = "values";

    const TYPE = "type";

    const STREAM_WRAPPER_CLASS_PATH = "com\\zoho\\crm\\api\\util\\StreamWrapper";

    const FIELD = "field";

    const CLASS_KEY = "class";

    const INDEX = "index";

    const ACCEPTED_VALUES = "accepted-values";

    const UNACCEPTED_VALUES_ERROR = "UNACCEPTED VALUES ERROR";

    const UNIQUE = "unique";

    const FIRST_INDEX = "first-index";

    const NEXT_INDEX = "next-index";

    const UNIQUE_KEY_ERROR = "UNIQUE KEY ERROR";

    const MIN_LENGTH = "min-length";

    const MAX_LENGTH = "max-length";

    const MAXIMUM_LENGTH = "maximum-length";

    const MINIMUM_LENGTH = "minimum-length";

    const MINIMUM_LENGTH_ERROR = "MINIMUM LENGTH ERROR";

    const REGEX = "regex";

    const INSTANCE_NUMBER = "instance-number";

    const REGEX_MISMATCH_ERROR = "REGEX MISMATCH ERROR";

    const ACCEPTED_TYPE = "accepted-type";

    const GIVEN_TYPE = "given-type";

    const ARRAY_KEY = "array";

    const LIST_NAMESPACE = "List";

    const MAP_NAMESPACE = "Map";

    const HASHMAP = "HashMap";

    const INTEGER_NAMESPACE = "Integer";

    const LONG_NAMESPACE = "Long";

    const BOOLEAN_NAMESPACE = "Boolean";

    const FLOAT_NAMESPACE = "Float";

    const DATE = "Date";

    const CONTENT = "content";

    const CONTENT_DISPOSITION = "Content-Disposition";

    const CONTENT_DISPOSITION1 = 'Content-disposition';

    const READ_ONLY = "read-only";

    const IS_KEY_MODIFIED = "isKeyModified";

    const REQUIRED = "required";

    const REQUIRED_IN_UPDATE = "required-in-update";

    const MANDATORY_KEY_ERROR = "Value missing or null for mandatory key(s) ";

    const SET_KEY_MODIFIED = "setKeyModified";

    const EXCEPTION_SET_KEY_MODIFIED = "Exception in calling setKeyModified : ";

    const STRUCTURE_NAME = "structure_name";

    const KEYS = "keys";

    const STRING_NAMESPACE= "String";

    const INTERFACE_KEY = "interface";

    const CLASSES = "classes";

    const RECORD_NAMESPACE = "com\\zoho\\crm\\api\\record\\Record";

    const USER_NAMESPACE = "com\\zoho\\crm\\api\\users\\User";

    const KEY_VALUES = "keyValues";

    const KEY_MODIFIED = "keyModified";

    const LOG_FILE_NAME = "sdk_logs.log";

    const TOKEN_FILE = "sdk_tokens.txt";

    const THREAD_LOCAL = "ThreadLocal";

    const EMAIL = "email";

    const USER_ERROR = "USER ERROR";

    const EXPECTED_TYPE = "expected-type";

    const REFRESH = "refresh";

    const GRANT = "grant";

    const FATAL = "FATAL";

    const ERROR_KEY = "ERROR";

    const WARNING = "WARNING";

    const INFO_KEY = "INFO";

    const DEBUG = "DEBUG";

    const TRACE = "TRACE";

    const ALL = "ALL";

    const OFF = "OFF";

    const TOKEN_ERROR = "TOKEN ERROR";

    const TOKEN = "\$TOKEN";

    const TOKEN_TYPE = "TOKEN_TYPE";

    const TOKEN_INITIALIZATION_ERROR = 'Exception in OAuthToken constructor';

    const ATTACHMENT_ID = "attachment_id";

    const FILE_ID = "file_id";

    const MODULEDETAILS = "moduleDetails";

    const MODULEPACKAGENAME = "modulePackageName";

    const FILEBODYWRAPPER = "FileBodyWrapper";

    const OBJECT = "Object";

    const KEYS_TO_SKIP = array("Created_Time", "Modified_Time", "Created_By", "Modified_By", "Tag");

    const INVENTORY_MODULES = array("invoices", "sales_orders","purchase_orders","quotes");

    const INVENTORY_MODULES_ITEMS = array("invoiced_items", "quoted_items","purchase_items","ordered_items");

    const NOTES = "Notes";

    const ATTACHMENTS = '$attachments';

    const DISCOUNT = "Discount";

    const ATTACHMENTS_NAMESPACE = "com\\zoho\\crm\\api\\attachments\\Attachment";

    const LINE_TAX = '$line_tax';

    const LINE_TAX_NAMESPACE = "com\\zoho\\crm\\api\\record\\LineTax";

    const PRODUCT_DETAILS = "product_details";

	const PRICING_DETAILS = "pricing_details";

    const PARTICIPANT_API_NAME = "participants";

    const PRICE_BOOKS = "price_books";

    const EVENTS = "events";

    const LAYOUT = "layout";

    const LAYOUT_NAMESPACE = "com\\zoho\\crm\\api\\layouts\\Layout";

    const SUBFORM = "subform";

    const LOOKUP = "lookup";

    const CONSENT_LOOKUP = "consent_lookup";

    const SKIP_MANDATORY = "skip-mandatory";

    const SE_MODULE = "se_module";

    const FILE_NAMESPACE = "com\\zoho\\crm\\api\\util\\StreamWrapper";

    const DATETIME_NAMESPACE = "DateTime";

    const FIELD_FILE_NAMESPACE = "com\\zoho\\crm\\api\\record\\FileDetails";

    const REMINDAT_NAMESPACE = "com\\zoho\\crm\\api\\record\\RemindAt";

    const SET_CONTENT_TYPE_HEADER = array("/crm/bulk/v3/read", "/crm/bulk/v3/write");

    const DATA_TYPE = array("List" => "array", "Boolean" => "boolean", "Long" => "string", "HashMap" => "array", "array" => "Map", "Map" => "array", "Float" => "double", "Date"=>"DateTime");

    const DOUBLE_NAMESPACE = "double";

    const USER_AGENT = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';

    const SET_API_URL_EXCEPTION = "Exception in setting API URL";

    const AUTHENTICATION_EXCEPTION = "Exception in authenticating current request : ";

    const FORM_REQUEST_EXCEPTION = "Exception in forming request body : ";

    const SDK_VERSION = "1.0.0-beta";

    const API_CALL_EXCEPTION = "Exception in current API call execution : ";

    const HTTP = "http";

    const CONTENT_API_URL = "content.zohoapis.com";

    const INVALID_URL_ERROR = "Invalid URL Error";

    const FIELDS_LAST_MODIFIED_TIME = "FIELDS-LAST-MODIFIED-TIME";

    const EXCEPTION = "Exception : ";

    const RECURRING_ACTIVITY_NAMESPACE = "com\\zoho\\crm\\api\\record\\RecurringActivity";

    const JSON_DETAILS_ERROR = "ERROR IN READING JSONDETAILS FILE : ";

    const INITIALIZATION_ERROR = "INITIALIZATION ERROR";

    const INITIALIZATION_EXCEPTION = "Exception in initialization : ";

    const SWITCH_USER_ERROR = "SWITCH_USER ERROR";

    const SWITCH_USER_EXCEPTION = "Exception in switchUser : ";

    const DELETE_FIELD_FILE_ERROR = "Exception in deleting Current User Fields file : ";

    const DELETE_FIELD_FILES_ERROR = "Exception in deleting all Fields files : ";

    const DELETE_MODULE_FROM_FIELDFILE_ERROR = "Exception in deleting module from Fields file : ";

    const IF_MODIFIED_SINCE = "If-Modified-Since";

    const MODULE_RESPONSE_WRAPPER = "com\zoho\crm\api\modules\ResponseWrapper";

    const MODULE_API_EXCEPTION = "com\zoho\crm\api\modules\APIException";

    const JSON_DETAILS_FILE_PATH = "src/resources/JSONDetails.json";

    const EVENTS_MODULE_PARAMS = array("startDateTime", "endDateTime");

    const USER_NOT_FOUND_ERROR = "USER NOT FOUND ERROR : ";

    const USER_NOT_FOUND_ERROR_MESSAGE  = "Given user not found in SDK configuration details";

    const HEADER_OR_PARAM_NAME = "HEADER OR PARAM";

    const URL = "URL";

	const PARAMS = "PARAMS";

	const PARAMETER_NULL_ERROR = "NULL PARAMETER ERROR";

	const HEADER_NULL_ERROR = "NULL HEADER ERROR";

	const PARAM_NAME_NULL_ERROR = "NULL PARAM NAME ERROR";

	const HEADER_NAME_NULL_ERROR = "NULL HEADER NAME ERROR";

	const PARAM_NAME_NULL_ERROR_MESSAGE = "Param Name MUST NOT be null";

	const HEADER_NAME_NULL_ERROR_MESSAGE = "Header Name MUST NOT be null";

	const NULL_VALUE_ERROR_MESSAGE = " MUST NOT be null";

	const PARAM_INSTANCE_NULL_ERROR = "Param Instance MUST NOT be null";

	const HEADER_INSTANCE_NULL_ERROR = "Header Instance MUST NOT be null";

	const CANT_DISCLOSE = " ## can't disclose ## ";

	const INITIALIZATION_SUCCESSFUL = "Initialization successful ";

	const INITIALIZATION_SWITCHED = "Initialization switched ";

	const IN_ENVIRONMENT = " in Environment : ";

	const FOR_EMAIL_ID = "for Email Id : ";

    const REFRESH_TOKEN_MESSAGE = "Access Token has expired. Hence refreshing.";

    const RESOURCE_PATH_ERROR_MESSAGE = "Resource Path MUST NOT be null/empty : ";

    const RESOURCE_PATH = "EMPTY_RESOURCE_PATH";

    const API_EXCEPTION = "API_EXCEPTION";

    const UNDERSCORE = "_";

    const RELATED_LISTS = "Related_Lists";

    const HREF = "href";

    const NO_CONTENT_STATUS_CODE = "204";

    const NOT_MODIFIED_STATUS_CODE = "304";

    const ACTIVITIES = "activities";

    const REMINDER_NAMESPACE = "com\\zoho\\crm\\api\\record\\Reminder";

    const CONSENT_NAMESPACE = "com\\zoho\\crm\\api\\record\\Consent";

    const COMMENT_NAMESPACE = "com\\zoho\\crm\\api\\record\\Comment";

    const SOLUTIONS = "solutions";

    const COMMENTS = "comments";

    const PRODUCT_NAME = "Product_Name";

    const API_ERROR_RESPONSE = "Error response :";

    const CASES = "cases";

    const PRIMARY = "primary";

    const ID ="id";

    const MANDATORY_VALUE_ERROR = "MANDATORY VALUE ERROR";

    const MANDATORY_KEY_NULL_ERROR = "Null Value for mandatory key : ";

    const CALLS = "Calls";

    const CALL_DURATION = "Call_Duration";

    const PRIMARY_KEY_ERROR = "Value null or missing for required key(s) : ";

    const FORMULA = "formula";

    const PICKLIST = "picklist";

    const NULL_VALUE = "null";

    const UNSUPPORTED_IN_API = "API UNSUPPORTED OPERATION";

    const UNSUPPORTED_IN_API_MESSAGE = "Operation is not supported by API";

    const USER = "\$user";

    const ENVIRONMENT = "\$environment";

    const STORE = "\$store";

    const SDK_CONFIG = "\$sdkConfig";

    const REFRESH_SINGLE_MODULE_FIELDS_ERROR = "Exception in refreshing fields of module : ";

    const REFRESH_ALL_MODULE_FIELDS_ERROR = "Exception in refreshing fields of all modules : ";

    const SDK_UNINITIALIZATION_ERROR = "SDK UNINITIALIZED ERROR";

    const SDK_UNINITIALIZATION_MESSAGE = "SDK is UnInitialized";

    const GIVEN_LENGTH = "given-length";

    const GIVEN_VALUE = "given-value";

    const IS_GENERATE_REQUEST_BODY = array(Constants::REQUEST_METHOD_PATCH, Constants::REQUEST_METHOD_POST, Constants::REQUEST_METHOD_PUT);

    const PHOTO = "photo";

    const CRM = "crm";

    const API_VERSION = "v2";

    const PHOTO_SUPPORTED_MODULES = array("leads", "contacts", "accounts", "products", "vendors", "deals", "cases", "solutions");

    const PHOTO_UPLOAD_ERROR_MESSAGE  = "The given module is not supported in API.";

    const INVALID_MODULE  = "INVALID_MODULE";

    const MYSQL_TABLE_NAME = "oauthtoken";

    const GET_TOKEN_BY_ID_FILE_ERROR = "Exception in getTokenById - FileStore : Given ID is invalid";

    const MULTI_SELECT_LOOKUP = "multiselectlookup";

    const MULTI_USER_LOOKUP = "multiuserlookup";

    const TERRITORIES = "territories";

    const GENERATED_TYPE = "generated_type";

    const GENERATED_TYPE_CUSTOM = "custom";

    const UPLOAD_PHOTO_UNSUPPORTED_ERROR = "UPLOAD PHOTO UNSUPPORTED MODULE";

	const UPLOAD_PHOTO_UNSUPPORTED_MESSAGE = "Photo Upload Operation is not supported by the module: ";

	const SDK_MODULE_METADATA = "SDK-MODULE-METADATA";

	const INVALID_MODULE_API_NAME_ERROR = "INVALID MODULE API NAME ERROR";

	const PROVIDE_VALID_MODULE_API_NAME = "PROVIDE VALID MODULE API NAME: " ;

	const INVALID_TOKEN_ERROR = "INVALID TOKEN ERROR" ;

	const NO_ACCESS_TOKEN_ERROR = "ACCESS TOKEN IS NOT PRESENT IN RESPONSE" ;

	const CLIENT_ID_NULL_ERROR_MESSAGE = "ClientID MUST NOT be null" ;

    const CLIENT_SECRET_NULL_ERROR_MESSAGE = "ClientSecret MUST NOT be null" ;

    const DEFAULT_MODULENAME_VS_APINAME = array("leads"=>"Leads", "contacts"=>"Contacts", "accounts"=>"Accounts", "deals"=>"Deals", "tasks"=>"Tasks", "events"=>"Events", "activities"=>"Activities", "calls"=>"Calls", "products"=>"Products", "quotes"=>"Quotes", "sales_orders"=>"Sales_Orders", "purchase_orders"=>"Purchase_Orders", "invoices"=>"Invoices", "campaigns"=>"Campaigns", "vendors"=>"Vendors", "price_books"=>"Price_Books", "cases"=>"Cases", "solutions"=>"Solutions", "visits"=>"Visits", "approvals"=>"Approvals", "notes"=>"Notes", "attachments"=>"Attachments", "actions_performed"=>"Actions_Performed");

    const TERRITORY_NAMESPACE = "com\\zoho\\crm\\api\\record\\Territory";

    const IMAGEUPLOAD_NAMESPACE = "com\\zoho\\crm\\api\\record\\ImageUpload";

    const USER_SIGNATURE_ERROR_MESSAGE = "UserSignature MUST NOT be null.";

    const ENVIRONMENT_ERROR_MESSAGE = "Environment MUST NOT be null.";

    const TOKEN_ERROR_MESSAGE = "Token MUST NOT be null.";

    const STORE_ERROR_MESSAGE = "Store MUST NOT be null.";

    const SDK_CONFIG_ERROR_MESSAGE = "sdkConfig MUST NOT be null.";

    const TAX_NAMESPACE = "com\\zoho\\crm\\api\\record\\Tax";

    const LINEITEM_PRODUCT = "com\\zoho\\crm\\api\\record\\LineItemProduct";

    const PRODUCTS = "Products";

    const TAX = "TAX";

    const TERRITORY = "Territory";

    const GET_TOKEN_BY_ID_DB_ERROR = "Exception in getTokenById - DBStore : Given ID is invalid";

    const RESOURCE_PATH_INVALID_ERROR_MESSAGE = "Resource Path MUST be a valid directory.";

    const USER_SIGNATURE_ERROR = "USERSIGNATURE ERROR";

    const OAUTH_MANDATORY_KEYS = ["grantToken", "refreshToken", "id", "accessToken"];

    const PHP = "php_";

    const SKIP_MODULES = array("deals");

    const OWNER_LOOKUP = "ownerlookup";

    const MULTI_MODULE_LOOKUP = "multi_module_lookup";
}
?>