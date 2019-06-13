package com.ttex.api;

import com.ttex.kits.EncryDigestUtil;
import com.ttex.kits.HttpUtilManager;
import com.ttex.kits.MapSort;
import org.apache.log4j.Logger;
import org.junit.Test;


import java.util.HashMap;
import java.util.Map;

public class RestTest {

	private static Logger log = Logger.getLogger(RestTest.class);

	// 正式
	public final String ACCESS_KEY = "ACCESS_KEY";
	public final String SECRET_KEY = "SECRET_KEY";
	public final String URL_PREFIX = "https://api.ttex.com/";

	/**
	 * 获取个人信息
	 */
	 @Test
	public void testGetAccount() {
		try {
			// 需加密的请求参数
			Map<String, String> params = new HashMap<String, String>();
			String json = this.getJsonPost(params);
			log.info("testGetAccount 结果: " + json);
		} catch (Exception ex) {
			ex.printStackTrace();
		}
	}



	/**
	 * 获取json内容(统一加密)
	 * 
	 * @param params
	 * @return
	 */
	private String getJsonPost(Map<String, String> params) {
		params.put("accessKey", ACCESS_KEY);// 这个需要加入签名,放前面
		String digest = SECRET_KEY;
		String sign = EncryDigestUtil.hmacSign(MapSort.toStringMap(params), digest); // 参数执行加密
		String method = "getAccount";
        	String param = "accessKey=" + ACCESS_KEY;
		params.put("reqTime", System.currentTimeMillis() + "");
       		String reqTime = params.get("reqTime");
        	String url =  URL_PREFIX+ "member/" + method +"?"+ param+"&sign=" + sign + "&reqTime=" + reqTime;
       		String json = HttpUtilManager.getInstance().sendHttps(url, params,"utf-8");
		return json;
	}

}
