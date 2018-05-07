<?

require ('/home/coinschedule/public_html/lib/bd.php');

$CSLogo = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAV/QAAFf0BzXBRYQAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAASUSURBVFiFvZddbBRVFMd/Z7qWAqWr2ZnZ3dI2JbSCPkkw+AF+BE1MTDQGvyAQhUADoX4QiJjQ2G6b7AOfCgYwAcSgvumDJj4pPJDw9cCDiUZAIyCwbXcbZLtAYypzfOjuZvbuTFFSOcl9uOee8///75mZM/eiqvhHoxtfb/omagRhV0wStrM8HrPzScfdPNHkScfdHI/Z+YTtLA8UkLCd1fGYraWRdNxd4wEuW7yE1qbm+tam5volr752O/JdfuyE7awurUkxYLmqHsQwy7I+zmQH3ynNG934XFV9QVUXADOAe4tL14DzInJMRL7NZAdP+3J2eZ73toktIiv6c9nPJGE776nqFjPAJ2I78J2q9qjqU2FxBvhREekFnvc8b8M4cRslHrPvA7qA0MD/ybYDaVFVABK2sxtYe5fI9wwM5ToBrJKn6NjzX1BEBBG5Y3KAcgVKlrCdHcA6IAz5koh8qaqHo9HoEEA+n7dFZKGqLgOaQ/IU+GhgKLe+YhOmgEY3Ps/zvBP4qlMOFtlaW1vbe/HK5RtBDNMm1U2ub2joUdX3A5Y9q6ZmfmZw4OS4ApKOe1xVHzOzLcvqyGQH94fsztzEKs/z9gVs4GR/LluBHTES5wSRi8i225Gn+tL1wDcisjeTHdyfdNw2sxKq+mijG5/r7xOWEfBKAPaVurq6Tf+C/DCwUFV37v5k36SBodwm4LIZq6ov++cRY3G+mSAiB85f+mM0gNQFFgM1wOvAPCAHPNe5puOvzjUdJB33gKr2GKkL/JNyBR5ov99irL2ain8IIG8CfgR2AjuAR4CLwJOp7q6ffOK/D8Brnd3WXlMloFAoTAWm+QKxLItEInHNBAFWAgnDty/V3XXG7xCRK4BnxE0rFApTqgSUcsxZSKOJBPhuBgWGWBm0LCAajd4ACuUIEbxbHplMpiEA4CAwbPgWpfrSU/0OVZ1O9SavN0Qbyn2kvPjz2TOeiFwwmSzLetb0pbq7fgceAvqAXuAIYy/XiVRf2vEJeCZA/IVfzp27VZqYpTwGPGHsYtWstvb02d9+/dsQcR7oAUj1pe8BjgIxxlouD86aXaOqK012ETlesUFj8esAxU3D+XxvgN8vZhRYCMxJdXcNAfx59Wov0BIg4KuKeUArPqWq8wIS3+jPZT8fT4gPY6mqfhGAcbo/l33Y76v64ViWtY5iGf2mqoeSjts3o7llUhjxjOaW2qTjpoLIARWRd01n1eekqovCCFT1g5GRkaVJxz0kIkdU9VLxM21W1adV9U1gZlg+8BJj71nZKh5B2AFyHCs1mapKhpl50C0LuAPyOza/CGlpnB4dHR3d5HnexrtB7hOxJRKJpGum1E1+y/O88T6zD0WkV0RmEn7cMu2UiHQw9nesOl/A2J9XREakeCtaAXwaEFdxgGx044+r6ovAfFVtBeqLS9dF5CJQupiUX7Sw07ZlWZ2Z7OAe/7F8DbA3jNy0WW3tkcLw8BRVJRqN3jxjdEq/mSIsy9qQyQ7uKJWiPOIxe0U8Zg/HY/a2ib6cxmP21njMvp503LWht+Ni4MaJJvddUntM3z+WF1yG8JaRGQAAAABJRU5ErkJggg==";

$GoldBadge_lrg = "data:image/png;base64,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";


$pointer = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAZCAYAAAAMhW+1AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAAAWdEVYdENyZWF0aW9uIFRpbWUAMTAvMTAvMTdoaGqsAAAAp0lEQVQokd3RsQ3CMBCF4f9sxaIwBbIoQjZIRcEK9KzAAHSMwTYsQs0CIKVHKZAeDYmUgHCBaDjpmrvPvpONJLoE1sB2UBuBI3AqimLyAsxsA9zNTCGE/QCklObe+zMgQM65Blj0wHu/c86pA888SIK6rpchhGbUlJm1ZTlbUVXVzczGpwUopakALu+a/T5kwgGWA9kb/gMoBz4/VIwx5sZc+fazfgwesRpnvr4QxzQAAAAASUVORK5CYII=";

$milestone = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAXRJREFUeNpi/P//PwM2EBAZ2QekUoB4zobly4sYcAAmXBJAg1O4RMV4QTQDHsAIc8HVJYXTgFQmA3FgunZMfxaKARfm5/xXVFZm+P/vH16djExMDPfv3gUbYpA4JYsFJvH9+w+Gzx/eM/z6+QPM//HnP0Pn3jcM9e6iKAawsLIySMvKMNy5dQfkWoQBP378YHj/7gPD18+f4Yoz9RkYXr14jWIAGzs7w8d7D8EuABuI5ILpj58+IyIMwBZM96pegxoG6MDF0/MTl7Awr7+Ly8/khAQOkqPxHzAwizMzGZYuX/4Ln3twGmBqbMzS3tfH8O/vXwayDDh+/Piff3//MERFRLDhNQEUBtiwta3tp30HDvwH0bjUgDBOF5ibm7M0tbeDw4IsLxw9cuQPyP+xMTF4vcCyZ88enLFQV1XJUFlR+UtVRQV7VLu4gBMSPxCrA7EBlAapVklKTOStr61jsLay4gXybwDxIyC+D8SXoWwQvgAQYACQn7rpq0O1xQAAAABJRU5ErkJggg==";


$ProjectLogo = "data:image/png;base64,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";

$missing_image = "data:image/png;base64,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";


  $proj_links = mysqli_query($db,"Select LinkTypeID,LinkTypeName,LinkID,Link,LinkTypeImage,ProjAffilLinks from tbl_links L inner join tbl_linktypes LT on L.LinkType = LT.LinkTypeID inner join tbl_projects P on L.LinkParentID = P.ProjID where L.LinkParentType = 1 and L.LinkParentID = '1396' Order By LinkTypeSortOrder");
  $numofrows = mysqli_num_rows($proj_links);
  
  
   $peoples = mysqli_query($db,"
  Select PeopleID,PeopleName,PeopleProjPosition
	from tbl_people P
  Inner join tbl_people_projects PP
  on P.PeopleID = PP.PeopleProjPeopleID
  where PeopleProjProjID = '1396'
  Order By PeopleProjSortOrder
  "); 
  
  $events = mysqli_query($db,"
  (
  Select EventID,EventProjID,ProjName,ProjImage,EventType,EventName,EventDesc,EventStartDate as EventDate,EventStartDateType,EventLocation,EventEndDate,EventTypeImage
	from tbl_events E
  Inner join tbl_eventtypes ET
  on E.EventType = ET.EventTypeID
  Left Join tbl_projects P
  on E.EventProjID = P.ProjID
	where EventTypeID <> 1 and EventProjID = '$projid'
  )
  Order By EventID,EventName
  "); 
  
  
   // Get Live ICOs from Database
  $icorank_threshold = mysqli_fetch_array(mysqli_query($db,"SELECT SettingValue FROM tbl_settings WHERE SettingID = 1"))['SettingValue'];
  
  $liveicos = mysqli_query($db,"
    Select * from
    (
      Select 
      ProjID,ProjImage,ProjImageLarge,ProjPackage,ProjDirectLink,ProjSponsored,ProjPlatinum,ProjDisableRibbon,
      EventID,EventName,ProjDesc,EventStartDate,EventEndDate,ProjCatName,ProjCatColor,
      ((unix_timestamp() - unix_timestamp(EventStartDate))/(unix_timestamp(EventEndDate)-unix_timestamp(EventStartDate)))*100 as Percent
      From tbl_events E 
      inner join tbl_projects P On E.EventProjID = P.ProjID
      left join tbl_project_categories PC on P.ProjCatID = PC.ProjCatID
      left join tbl_submissions S ON S.SubProjID = P.ProjID  
      Where ProjDeleted = 0 and EventDisabled = 0 and EventType = 1 and ProjICORank > $icorank_threshold and (S.SubStatus = 2 or S.SubStatus IS NULL) and 
      EventStartDateType <> 3 and EventStartDate <= UTC_TIMESTAMP and EventEndDate > UTC_TIMESTAMP
      $platfilter
      $catfilter
    ) as E
    Order By ProjPackage DESC, Percent DESC
  ");


?>