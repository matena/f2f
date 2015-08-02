						<div class="btn" data-toggle="tooltip" data-placement="top" title="Show only hosts with WiFi">
							<svg alt="Pick hosts with Wifi" version="1.2" baseProfile="tiny" id="wifi_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								 x="0px" y="0px" width="50px" height="50px" viewBox="0 0 25 25" xml:space="preserve" onclick="ChangeColor1()" >
								Pick hosts with Wifi
								<script type="text/ecmascript" cursor="pointer">	
									<![CDATA[

										var clickedWifi;
										clickedWifi = false;
										
										function ChangeColor1() {
										//  document.getElementById("wifi").setAttribute("filter","url(#blur1)");
											clickedWifi = !clickedWifi;
											if (clickedWifi) { 
												document.getElementById("wifiBackground").setAttribute("fill","#E8F12B");
											} else {
												document.getElementById("wifiBackground").setAttribute("fill","#e0e0e0");
											}
										  }
									 ]]>

								</script>
								<defs>
									<filter id="blur1" x="0" y="0">
										<feGaussianBlur in="SourceGraphic" stdDeviation="0.2" />
									</filter>
								</defs>
								<g id="wifiBackground" fill="#e0e0e0">
									<rect id="wifiBackgroundRect" x="0" y="0" rx="3" ry="3" width="24" height="24"/>
								</g>
								<g id="waves" fill="#808080">
								<g>
									<path d="M13.414,19.412c0.783-0.779,0.783-2.047,0-2.826c-0.781-0.785-2.049-0.785-2.828-0.002c-0.783,0.783-0.783,2.051,0,2.831
										C11.367,20.195,12.635,20.196,13.414,19.412z"/>
								</g>
								<g>
									<path d="M20.485,11.515c-0.512,0-1.024-0.195-1.414-0.586c-3.899-3.899-10.243-3.898-14.143,0c-0.782,0.781-2.048,0.78-2.829,0
										c-0.781-0.781-0.781-2.047,0-2.829c5.459-5.458,14.341-5.458,19.799,0c0.781,0.781,0.781,2.047,0,2.828
										C21.509,11.319,20.997,11.515,20.485,11.515z"/>
								</g>
								<g>
									<path d="M7.757,15.757c-0.512,0-1.024-0.195-1.414-0.586c-0.781-0.781-0.781-2.047,0-2.828c3.118-3.119,8.194-3.119,11.313,0
										c0.781,0.781,0.781,2.047,0,2.829c-0.781,0.781-2.047,0.781-2.829,0c-1.559-1.56-4.097-1.559-5.657,0
										C8.781,15.562,8.269,15.757,7.757,15.757z"/>
								</g>
								</g>
							</svg>
						</div>
