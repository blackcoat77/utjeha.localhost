<table class="table table-bordered">
              <thead>
                <tr>
                    <th class="title-space"><?php
                    print render($content['field_type']['#title']);?>
                    </th>
                  <td><?php print $type; ?></td>    
                </tr>
              </thead>
               <tbody>  
                   
                   <tr>
                     <th><?php print render($content['field_district']['#title']);?></th>
                     <td><?php print $district;  ?></td>
                  </tr>
                
                <tr>
                     <th><?php print render($content['field_location']['#title']);?></th>
                     <td><?php print $location; ?></td>
                </tr>
                
                <tr>
                      <th><?php print render($content['field_state']['#title']);?></th>
                      <td><?php print $state; ?></td>
                </tr>
                
                <tr>
                      <th><?php print render($content['field_living_area']['#title']);?> ( m² ) </th>
                      <td><?php print $living_area; ?></td>
                </tr>
                
               <tr>
                  <th><?php print render($content['field_land_area']['#title']);?> ( m² ) </th>
                  <td><?php print $land_area; ?></td>
                </tr>
                
                
                <tr>
                  <th><?php print render($content['field_bedrooms']['#title']);?></th>
                  <td><?php print $bedrooms; ?></td>
                </tr>
                
                
               <tr>
                  <th><?php print render($content['field_baths']['#title']);?></th>
                  <td><?php print $baths; ?></td>
                </tr>
                
                <tr>
                  <th><?php print render($content['field_parking_spots']['#title']);?></th>
                  <td><?php print $parking; ?></td>
                </tr>
                
                 <tr>
                      <th><?php print render($content['field_from_shore']['#title']);?> ( m ) </th>
                      <td><?php print $from_shore; ?></td>
                </tr>
                
                <tr>
                  <th><?php print render($content['field_description']['#title']);?></th>
                  <td><?php print $description; ?></td>
                </tr>
  
                <tr>
                    <th><?php print render($content['field_house_plan']['#title']);?></th>
                    <td colspan="2"><?php  print render($content['field_house_plan'])?></td>
                </tr>
                
              </tbody>
            </table>



