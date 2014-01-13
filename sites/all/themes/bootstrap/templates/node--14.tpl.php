<table class="table table-bordered">
              <thead>
                <tr>
                  <th class="title-space">Type</th>
                  <td><?php print $type; ?></td>    
                </tr>
              </thead>
               <tbody>  
                   
                   <tr>
                     <th>District</th>
                     <td><?php print $district;  ?></td>
                  </tr>
                
                <tr>
                     <th>Location</th>
                     <td><?php print $location; ?></td>
                </tr>
                
                <tr>
                      <th>State</th>
                      <td><?php print $state; ?></td>
                </tr>
                
                <tr>
                      <th>Living Area ( m² )</th>
                      <td><?php print $living_area; ?></td>
                </tr>
                
               <tr>
                  <th>Land Area ( m² )</th>
                  <td><?php print $land_area; ?></td>
                </tr>
                
                
                <tr>
                  <th>Bedrooms</th>
                  <td><?php print $bedrooms; ?></td>
                </tr>
                
                
               <tr>
                  <th>Baths</th>
                  <td><?php print $baths; ?></td>
                </tr>
                
                <tr>
                  <th>Parking Spots</th>
                  <td><?php print $parking; ?></td>
                </tr>
                
                 <tr>
                      <th>Distance From Shore ( m )</th>
                      <td><?php print $from_shore; ?></td>
                </tr>
                
                <tr>
                  <th>Description</th>
                  <td><?php print $description; ?></td>
                </tr>
  
                <tr>
                    <th>House Plan *click on image to zoom in</th>
                  <td colspan="2"><?php  print render($content['field_house_plan'])?></td>
                </tr>
                
              </tbody>
            </table>



