<?php if(!empty($Mow))return;$Mow=true;Whe(DIR_CACHE."lightning/");define('Wa',DIR_CACHE."lightning/".'b');if(file_exists(Wa))$Ma=unserialize(file_get_contents(Wa));else$Ma=array();$Mz=false;$Mve=false;$Mvs="3.28";$Mvq="";if(!empty($_SERVER["HTTP_USER_AGENT"]))$Mvq=$_SERVER["HTTP_USER_AGENT"];$Mu=preg_match("/bot|crawl|slurp|spider|hthou/i",$Mvq);if(substr($_SERVER["REQUEST_URI"],-10)=="?lightning"){$Mve=true;require"zero.php";exit;}
$Mwo=!empty($_COOKIE["lix"]);if(!empty($_GET["li_op"])){$Mz=$_GET["li_op"];if($Mz=="cn"){require_once"special.php";Wgl();}
if($Mz=="bt"){require_once"special.php";Wht();}
if($Mz=="lg")if(!$Mwo)require_once"zero.php";else{require_once"special.php";Wes();}
if($Mz=="pt"){$Mks=DIR_IMAGE."cache/lightning";if(!file_exists($Mks))@mkdir($Mks,0777,true);file_put_contents($Mks."/push.css","a{color:black;}");$Mbm=HTTPS_SERVER."image/cache/lightning/push.css";$Mbm=substr($Mbm,strpos($Mbm,'/',10));header("Link: <$Mbm>; rel=preload; as=style");exit;}}
define("LIGHT_FRONTEND",true);register_shutdown_function('Web');if($Mwo){ini_set("display_errors","On");ini_set("display_startup_errors",TRUE);error_reporting(-1 ^ E_STRICT);}
$Mgf=DIR_LOGS.'cv';if(empty($Ma['fp']))$Mnh="=api/";else$Mnh=$Ma['fp']." =api/";if(!file_exists($Mgf))foreach(explode(' ',$Mnh)as$Mnx)if($Mnx=trim($Mnx)&&strpos($_SERVER["REQUEST_URI"],$Mnx)!==false){if(!empty($Ma)&&$Ma['cj']){if(!is_dir(DIR_CACHE."lightning/beta/qwert"))mkdir(DIR_CACHE."lightning/beta/qwert",0777,true);if(defined("VERSION"))define("LVERSION",VERSION);else{$Maj=Wak("define('VERSION', '","'",file_get_contents(substr(DIR_SYSTEM,0,-7)."index.php"));if(!$Maj)$Maj="3";define("LVERSION",$Maj);}
function Wcv($Map){static$Mkl;if(!$Mkl)$Mkl=phpversion();if($Mkl<"5.3")clearstatcache();else clearstatcache(true,$Map);}
function Wby($Mdl,$Min,$Mdk){preg_match_all("/$Mdl([^$Min]*)/i",$Mdk,$Mcu);return($Mcu[1]);}
class light_db {public$driver;public function __construct($driver){$this->driver=$driver;}
private function Wbw($Mis,$Mit=false){$Mis=str_replace('`','',$Mis);if(!$Mis)return 0;if($Mis!=strtolower($Mis))return 0;static$Miu;if(!$Mit and!empty($Miu[$Mis]))return$Miu[$Mis];$Miv=DIR_CACHE."lightning/beta/qwert";$Map=$Miv."/$Mis";if($Mit){if(!file_exists($Map))file_put_contents($Map,'',LOCK_EX);touch($Map);$Miu[$Mis]=time();return$Miu[$Mis];}
if(!file_exists($Map))$Miu[$Mis]=0;else$Miu[$Mis]=filemtime($Map);return$Miu[$Mis];}
private function Wbz($Mhj){$Miu=array_merge(Wby("FROM "," ",$Mhj),Wby("INTO "," ",$Mhj),Wby("UPDATE "," ",$Mhj));foreach($Miu as$Mis){$Mis=trim($Mis);if(!preg_match("/^[`a-z0-9_-]+$/",$Mis))continue;$this->Wbw($Mis,true);}}
public function query($Mhj){$Mhj=(string)$Mhj;if(strpos($Mhj,"customer_id = '0') AND date_added < DATE_SUB(NOW(), INTERVAL 1 HOUR)"))$Mhj=str_replace("INTERVAL 1 HOUR","INTERVAL 7 DAY",$Mhj);$Mjn=strtoupper(substr(trim($Mhj),0,6));if($Mjn=="DELETE"||$Mjn=="INSERT"||$Mjn=="UPDATE"||$Mjn=="REPLAC")$this->Wbz($Mhj);return$this->driver->query($Mhj);}
public function escape($Mad){return$this->driver->escape($Mad);}
public function countAffected(){return$this->driver->countAffected();}
public function getLastId(){return$this->driver->getLastId();}
public function __destruct(){unset($this->driver);}}
function Ws(){global$Mir;if($Mir)return$Mir;if(LVERSION<"2.0"&&defined("DIR_DATABASE")){$Map=DIR_DATABASE.DB_DRIVER.".php";$Mqr=substr(DIR_SYSTEM,0,-7)."vqmod/vqcache/vq2-system_".str_replace('/','_',str_replace(DIR_SYSTEM,'',$Map));if(file_exists($Mqr))$Map=$Mqr;if(file_exists($Map)){require_once($Map);$Mjy="DB".DB_DRIVER;if(!class_exists($Mjy))$Mjy=DB_DRIVER;$Mir=new$Mjy(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);}else{exit("Lightning: Could not load database driver type ".DB_DRIVER.'!');}
}else{$Map=DIR_SYSTEM."library/db/".DB_DRIVER.".php";if(!file_exists($Map))$Map=DIR_SYSTEM."library/db/".strtolower(DB_DRIVER).".php";require_once($Map);$Mjy="DB\\".DB_DRIVER;if(class_exists($Mjy)){$Mir=new$Mjy(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);}else{exit("Lightning: Could not load database driver ".DB_DRIVER.'!');}}
return$Mir;}
function Wbu(){return new light_db(Ws());}}
return;}
if(!empty($_SERVER["HTTP_X_REAL_HOST"]))$_SERVER["HTTP_HOST"]=$_SERVER["HTTP_X_REAL_HOST"];define('Wdr',$Mvq=="Lightning CRON Job");if(!empty($_GET["li_source"]))require"zero.php";if(!Wdr and$Mz){header("X-Robots-Tag: none",true);if($Mz[0]=="t"){$Mnw=true;require_once"tetha.php";}
if($Mz=="by"){@unlink($Mgf);@unlink(DIR_CACHE."lightning/".'b');require_once"zero.php";}
if($Mz=="n"||$Mz=="s")require_once"zero.php";}
$Mgy=microtime(true);$Moj=DIR_CACHE."lightning/".'dg';if($Mam=isset($_GET["li_sql"])){$_SERVER["REQUEST_URI"]=str_replace("?li_sql=1","",$_SERVER["REQUEST_URI"]);$_SERVER["REQUEST_URI"]=str_replace("&li_sql=1","",$_SERVER["REQUEST_URI"]);unset($_GET["li_sql"]);unset($_REQUEST["li_sql"]);require_once"beta.php";require_once"special.php";Wfu("index.php");}
if($Mz=="gens"&&$_GET["cd"]>10000000&&file_exists($Mgf)){unlink($Mgf);Whu();}else if(file_exists($Mgf)and empty($_COOKIE['az'])){$Mhb=file_get_contents($Mgf);if((!strpos($Mhb,"comm")&&filemtime($Mgf)>time()-7200)or (filemtime($Mgf)>time()-10*60)or ($Mhb=='dd')){if($Mz)die("false");Wf();return;}
unlink($Mgf);}
define("LIGHT_ENABLED",true);require_once"zero.php";function Wf($Mox=false){global$Mz,$Mvq;if($Mz or!empty($_SERVER["HTTP_X_REQUESTED_WITH"])or(!empty($_SERVER["HTTP_ACCEPT"])&&substr($_SERVER["HTTP_ACCEPT"],0,5)=="image")or(!empty($_POST))or!empty($_COOKIE['az'])or($Mvq=="Lightning CRON Job"))return;global$Moj;if(file_exists($Moj)){if(filemtime($Moj)<time()-15)return;}
global$Moy,$Mgy;$Moy=rand(0,10000000);$Mbm['id']=$Moy;$Mbm['Mbt']=$Mgy;if(!empty($_SERVER["REMOTE_ADDR"]))$Mbm['ip']=$_SERVER["REMOTE_ADDR"];if($Mvq)$Mbm['Mon']=$Mvq;if($Mox)$Mbm['Mox']=$Mox;$Mbm['Mbe']="http".(($_SERVER["SERVER_PORT"]==443)?"s://":"://").$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];file_put_contents($Moj,serialize($Mbm)."\n",FILE_APPEND|LOCK_EX);}
function Web(){$Moz=false;if($Mo_=error_get_last())if($Mo_["type"]==1||$Mo_["type"]==4||$Mo_["type"]==16||$Mo_["type"]==64){if($Maf=strpos($Mo_["file"],"lightning/epsilon/"))unlink($Mo_["file"]);if(strpos($Mo_["message"],"annot declare class"))$Mo_=false;if(strpos($Mo_["message"],"annot redeclare class"))$Mo_=false;if(strpos($Mo_["message"],"server has gone away"))$Mo_=false;if(strpos($Mo_["message"],"trtotime"))$Mo_=false;if(strpos($Mo_["message"],"MySQLi->__construct"))$Mo_=false;if($Mo_){$Moz=str_replace("\n","<br/>",$Mo_["message"])." in ".str_replace(substr(DIR_SYSTEM,0,-7),'',$Mo_["file"]);$Moz=str_replace(substr(DIR_SYSTEM,0,-7),'',$Moz);if($Mo_["line"])$Moz.=":".$Mo_["line"];require_once"special.php";Wb("php_error",true,array("error"=>$Moz,"url"=>true,"lightning_disabled"=>!defined("LIGHT_ENABLED")));}}
global$Moj,$Moy;if($Moy){if(!$Moz){global$Mj;if($Mj)$Moz='+'.$Mj;}
file_put_contents($Moj,$Moy.'|'.microtime(true).'|'.$Moz."\n",FILE_APPEND|LOCK_EX);}}
function Wt(){static$Mlr;if($Mlr or!empty($_COOKIE['az']))return;global$Mam,$Mz;if($Mam and function_exists('Wck')){Wck();$Mlr=true;return true;}
if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"]))return;if(!empty($_SERVER["HTTP_ACCEPT"])&&substr($_SERVER["HTTP_ACCEPT"],0,5)=="image")return;if($Mz)return;global$Mgy,$Mgf;if(!$Mgy)return;$Mpa=!file_exists($Mgf);$Mpb=microtime(true)-$Mgy;$Map=DIR_CACHE."lightning/".'de';if(file_exists($Map))$Mod=unserialize(file_get_contents($Map));else $Mod=array('do'=>0,'dp'=>0,'dm'=>0,'dn'=>0,'Moe'=>0);$Mod['Moe']=$Mpb;if($Mpa){if(empty($Mod['dp']))$Mod['dp']=0;if(empty($Mod['do']))$Mod['do']=0;$Mod['dp']+=$Mpb;$Mod['do']++;}else{if(empty($Mod['dn']))$Mod['dn']=0;if(empty($Mod['dm']))$Mod['dm']=0;$Mod['dn']+=$Mpb;$Mod['dm']++;}
if(!file_exists(DIR_CACHE."lightning"))mkdir(DIR_CACHE."lightning");Whr($Map,$Mod);$Mlr=true;}
function Whu(){$Map=DIR_CACHE."lightning/".'de';if(!file_exists($Map))return;global$Mgf;$Mpa=!file_exists($Mgf);$Mod=unserialize(file_get_contents($Map));if($Mpa){$Mod['dp']=0;$Mod['do']=0;}else{$Mod['dn']=0;$Mod['dm']=0;}
if(!file_exists(DIR_CACHE."lightning"))mkdir(DIR_CACHE."lightning");Whr($Map,$Mod);}
function Whe($Mks){if(file_exists($Mks))return false;@mkdir($Mks,0777,true);@chmod($Mks,0777);return true;}
function Whr($Map,$Mbq){file_put_contents($Map,serialize($Mbq),LOCK_EX);}