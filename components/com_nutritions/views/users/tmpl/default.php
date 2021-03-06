<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php  JHTML::_('behavior.tooltip');  ?>

<form action="index.php?option=com_projects&amp;tmpl=component" method="post" name="adminForm">
	<table>
		<tr>
			<td width="100%">
				<?php echo JText::_( 'Filter' ); ?>:
				<input type="text" name="search" id="search" value="<?php echo $this->lists['search'];?>" class="text_area" onchange="document.adminForm.submit();" />
				<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
				<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_type').value='0';this.form.getElementById('filter_logged').value='0';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
			</td>
			<td nowrap="nowrap">
				<?php echo $this->lists['type'];?>
				<?php //echo $this->lists['logged'];?>
			</td>
		</tr>
	</table>

	<table class="adminlist" cellpadding="1">
		<thead>
			<tr>
				<th width="2%" class="title">
					<?php echo JText::_( 'NUM' ); ?>
				</th>
				<th class="title">
					<?php echo JHTML::_('grid.sort',   'Name', 'a.name', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
				</th>
				<th width="15%" class="title">
					<?php echo JHTML::_('grid.sort',   'Group', 'groupname', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
				</th>
				<th width="15%" class="title">
					<?php echo JHTML::_('grid.sort',   'E-Mail', 'a.email', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
				</th>
				<th width="1%" class="title" nowrap="nowrap">
					<?php echo JHTML::_('grid.sort',   'ID', 'a.id', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
				</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php
			$k = 0;
			for ($i=0, $n=count( $this->items ); $i < $n; $i++)
			{
				$row 	=& $this->items[$i];

				$img 	= $row->block ? 'publish_x.png' : 'tick.png';
				$task 	= $row->block ? 'unblock' : 'block';
				$alt 	= $row->block ? JText::_( 'Enabled' ) : JText::_( 'Blocked' );
				//$link 	= 'index.php?option=com_users&amp;view=user&amp;task=edit&amp;cid[]='. $row->id. '';

				if ($row->lastvisitDate == "0000-00-00 00:00:00") {
					$lvisit = JText::_( 'Never' );
				} else {
					$lvisit	= JHTML::_('date', $row->lastvisitDate, '%Y-%m-%d %H:%M:%S');
				}
			?>
			<tr class="<?php echo "row$k"; ?>">
				<td>
					<?php echo $i+1+$this->pagination->limitstart;?>
				</td>
				
				<td>
                                        <a style="cursor:pointer" onclick="window.opener.setUser('<?php echo $row->id; ?>','<?php echo $row->name; ?>', '<?php echo $this->tagId; ?>' ); ">
						<?php echo $row->name; ?>
                                        </a>
				</td>
				<td>
					<?php echo JText::_( $row->groupname ); ?>
				</td>
				<td>
						<?php echo $row->email; ?>
				</td>
				<td>
					<?php echo $row->id; ?>
				</td>
			</tr>
			<?php
				$k = 1 - $k;
				}
			?>
		</tbody>
	</table>

	<input type="hidden" name="option" value="com_projects" />
        <input type="hidden" name="view" value="users" />
	<input type="hidden" name="task" value="" />
        <input type="hidden" name="uid" value="<?php echo $this->tagId; ?>" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>