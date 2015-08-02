<div class="btn" data-toggle="tooltip" data-placement="top" title="Show only hosts with telephone available to guests">
						<svg alt="Pick hosts with phone available" version="1.2" baseProfile="tiny" id="phone_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" width="50px" height="50px" viewBox="0 0 25 25" xml:space="preserve" onclick="ChangeColor3()" >
							Pick hosts with phone available
							<script type="text/ecmascript">

								 <![CDATA[
									var clikedPhone;
									clickedPhone = false;
									
									function ChangeColor3() {
									//  document.getElementById("phone").setAttribute("filter","url(#blur1)");
										clickedPhone = !clickedPhone;
										if (clickedPhone) { 
											document.getElementById("phoneBackground").setAttribute("fill","#E8F12B");
											document.getElementById("phone_icon").setAttribute("color","red");
										} else {
											document.getElementById("phoneBackground").setAttribute("fill","#e0e0e0");
											document.getElementById("phone_icon").setAttribute("color","grey");
										}
									  }
								 ]]>
							</script>
							<g id="phoneBackground" fill="#e0e0e0">
								<rect id="phoneBackground" x="0" y="0" rx="3" ry="3" width="24" height="24"/>
							</g>

						<g id="phone" fill="#808080">
							<path d="M13.374,7.083l3.711-3.71l-0.438-0.434c-0.566-0.566-1.555-0.566-2.121,0l-1.586,1.586C12.656,4.809,12.5,5.186,12.5,5.586
								s0.156,0.777,0.438,1.06L13.374,7.083z"/>
							<path d="M6.646,12.939c-0.566-0.566-1.555-0.566-2.121,0l-1.586,1.586C2.656,14.809,2.5,15.186,2.5,15.586s0.156,0.777,0.441,1.062
								l0.437,0.432l3.703-3.703L6.646,12.939z"/>
							<path d="M18.437,4.729l-0.354-0.354l-3.708,3.708l0.65,0.649c0.095,0.095,0.146,0.22,0.146,0.354s-0.052,0.259-0.146,0.354
								l-5.586,5.586c-0.189,0.188-0.518,0.189-0.707,0l-0.65-0.65L4.38,18.086l0.354,0.354c0.26,0.26,1.246,1.105,3.056,1.105
								c1.616,0,4.256-0.712,7.65-4.105C22.213,8.665,18.598,4.89,18.437,4.729z"/>
						</g>
							
						</svg>
						</div>