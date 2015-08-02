<div class="btn" data-toggle="tooltip" data-placement="top" title="Toggle to show only hosts who´s home is smoking/nosmoking">
						
						<svg alt="Pick non-smoking hosts" version="1.2" id="smoking_allowed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="50px" height="50px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" onclick="ChangeColor4()">
							 Pick non-smoking hosts
							<script type="text/ecmascript">
							 <![CDATA[
								var clickedShopping;
								clickedPhone = false;
								
								function ChangeColor4() {
								//  document.getElementById("phone").setAttribute("filter","url(#blur1)");
									clickedShopping = !clickedShopping;
									if (clickedShopping) {
										document.getElementById("smoke").setAttribute("fill","red");
										document.getElementById("smokeBackground").setAttribute("fill","#E8F12B");
									} else {
										document.getElementById("smoke").setAttribute("fill","#e0e0e0");
										document.getElementById("smokeBackground").setAttribute("fill","#e0e0e0");
									}
								  }
							 ]]>
							</script>
							<g id="smokeBackground" fill="#e0e0e0">
								<rect id="smokeBackgroundRect" x="0" y="0" rx="8" ry="8" width="64" height="64"/>
							</g>

							 <g id="smoking_sign" fill="#808080">
							<path id="smoke" fill="#e0e0e0" d="M32.083,61.5c16.338,0,29.583-13.245,29.583-29.583c0-16.338-13.245-29.583-29.583-29.583
								C15.745,2.333,2.5,15.578,2.5,31.917C2.5,48.255,15.745,61.5,32.083,61.5z M32.083,7.333c13.555,0,24.583,11.028,24.583,24.583
								c0,5.674-1.938,10.902-5.179,15.067L40.481,36.011h5.686v-8.565H31.89L16.957,12.559C21.132,9.29,26.382,7.333,32.083,7.333z
								 M12.716,16.804l10.675,10.642H10.5v8.565h21.483l15.274,15.227c-4.182,3.292-9.45,5.263-15.173,5.263
								C18.528,56.5,7.5,45.472,7.5,31.917C7.5,26.221,9.452,20.976,12.716,16.804z"/>
							<rect x="10" y="27.446" width="36.5" height="8.565"/>
							<rect x="47.5" y="27.446" width="2.667" height="8.565"/>
							<rect x="51.5" y="27.446" width="2.667" height="8.565"/>
							<path d="M39.994,18.538c0,0,10.006-0.041,12.173,6.36c0,0-0.5-10.059-12.833-9.874c-12.333,0.185-11.5-5.733-11.5-5.733
								S24.488,16.873,39.994,18.538z"/>
							<path d="M49.333,26.632c0,0-0.409-7.038-10.489-6.908c-10.081,0.129-9.399-4.011-9.399-4.011s-2.734,5.305,9.94,6.47
								C39.384,22.182,47.562,22.154,49.333,26.632z"/>
						</g>
						</svg>
						</div>
						